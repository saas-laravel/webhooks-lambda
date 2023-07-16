const { SQS } = require("@aws-sdk/client-sqs");

let sqs = new SQS({
    region: process.env.SQS_REGION,
});

exports.handler = async function (event) {
    let body = null;

    if (event !== null && event !== undefined) {
        body = JSON.parse(JSON.stringify(event));
    }

    if (! body) {
        return {
            statusCode: 422
        };
    }

    let sqsParams = {
        QueueUrl: process.env.QUEUE_URL,
        MessageBody: JSON.stringify({
            data: body,
        })
    }

    try {
        await sqs.sendMessage(sqsParams);
    } catch (err) {
        console.error(err);
        return {
            statusCode: 500,
        };
    }

    return {
        statusCode: 200
    };
}
