Feature: Welcome message

  Scenario: The Gherkin Headless UI
    Given I am on "/hello/Behat"
    And I fill in "Behat" for "s"
    Then I should see "Hello Behat!"
