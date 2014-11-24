Feature: Welcome message

  Scenario: Simple test
    Given I am on "/hello/Behat"
    Then I should see "Hello Behat!"
