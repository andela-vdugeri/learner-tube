# Contributing

Thank you for considering contributing to this project.Contributions are welcome, and are accepted via pull requests. Please review these guidelines before submitting any pull requests.

## Pull Requests

Ensure that all tests are passing before sending a pull request.

Send a coherent commit history, making sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please squash them before submitting.

## Running Tests

``` bash
$ vendor/bin/phpunit
```

If the test suite passes on your local machine, you should be good to go. When you make a pull request, the tests will automatically be run again by Travis CI on multiple php versions and hhvm.