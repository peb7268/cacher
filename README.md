#Utility Module to pull from a datasource and cahce the results.
The purpose is to make whatever consumes this app quicker and not reliant on a 3rd party load quite as much.

###Noteable Features
1. Built completely in a TDD manner
2. Loosely coupled and modular so it can be dropped in anywhere or extended to fit 
any projects needs.
3. Accepts an interchangeable data source. ( CSV, Web Service, DataBase Call ect..)

####TDD Notes
This project uses Guard. 
To use guard simply type: 
1. guard init phpunit: This makes an empty phpunit guardfile with some defaults.
2. Then configure the guardfile to match your installation specifics. An example is below.
3. invoke guard by typing guard init in the console.

The syntax of the guard file is: 
```markdown
guard 'phpunit', :cli => '--colors', :tests_path => 'test', :clear => true, :keep_failed => true, :all_after_pass => true do
  watch(%r{^.+Test\.php$})
  watch(%r{^src/classes/(.+)\.php$}) { |m| "test/#{m[1]}Test.php" }
end
```

In the above code the two watch expressions are what tell guard which directories contain the src files and test files. The php / tdd defacto naming convention is src for source files and test for test files. Hence the config above. The symbol :tests_path above tells guard where the tests are.