When /I am logged in as "(.*)" with password "(.*)"/ do |username, password|
  Then "I am on the login page"
  And "I fill in \"username\" with \"#{username}\""
  And "I fill in \"password\" with \"#{password}\""
  And "I press \"Login\""
  And "I should see \"You are logged in as\""
end

When /I am not logged in/ do
  Then "I am on the login page"
  And "I should not see \"You are logged in as\""
end

When /I am logged in as admin/ do
  Then "I am logged in as \"admin\" with password \"passworD1!\""
end

When /I am logged in as (?:a )learner/ do
  Then "I am logged in as \"learner\" with password \"passworD1!\""
end