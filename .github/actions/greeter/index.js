const core = require("@actions/core");
const github = require("@actions/github");

try {
  throw new Error("intentional error thrown.");
  const personToGreet = core.getInput("who-to-greet");
  console.log(`Hello ${personToGreet}`);

  const time = new Date();
  core.setOutput("time", time.toDateString());

  console.log(JSON.stringify(github, null, "\t"));
} catch (error) {
  core.setFailed(error.message);
}
