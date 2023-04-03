const openai = require('openai');

openai.apiKey = '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';

const prompt = 'Hello, how are you?';
const model = 'text-davinci-002';
const maxTokens = 150;
const n = 1;
const stop = '\n';

async function generateResponse(prompt) {
    const response = await openai.complete({
        engine: model,
        prompt: prompt,
        maxTokens: maxTokens,
        n: n,
        stop: stop
    });
    // console.log(response.choices[0].text);
    return response.choices[0].text.trim();
}

module.exports = {
    generateResponse
};