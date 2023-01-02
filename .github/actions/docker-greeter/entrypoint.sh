#!/bin/sh -e


echo "::debug ::Debug Message"
echo "::warning ::Warning Message"
echo "::error ::Error Message"

echo "::add-mask::$1"
echo "Hello $1"

time=$(date)
echo "time=$time" >> $GITHUB_OUTPUT

echo "::group::Expandable logging"
echo "log message 1"
echo "log message 2"
echo "log message 3"
echo "::endgroup::"

echo "HELLO=hello" >> $GITHUB_ENV