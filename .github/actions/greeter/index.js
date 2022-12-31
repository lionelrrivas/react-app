const core = require("@actions/core");
const github = require("@actions/github");

try {
  core.debug("debug message");
  core.warning("warning message");
  core.error("error message");

  const personToGreet = core.getInput("who-to-greet");
  console.log(`Hello ${personToGreet}`);
  core.setSecret(personToGreet);

  const time = new Date();
  core.setOutput("time", time.toDateString());

  core.startGroup("Logging github object");
  console.log(JSON.stringify(github, null, "\t"));
  core.endGroup();

  core.exportVariable("HELLO", "hello");
} catch (error) {
  core.setFailed(error.message);
}
