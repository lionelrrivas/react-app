module.exports = {
  branches: "main",
  repositoryUrl: "https://github.com/lionelrrivas/react-app.git",
  plugins: [
    "@semantic-release/commit-analyzer",
    "@semantic-release/release-notes-generator",
    "@semantic-release/github",
  ],
};
