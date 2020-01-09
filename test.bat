@ECHO OFF
vendor\bin\phpstan analyze --level=4 && codecept run unit && codecept run wpunit && codecept run functional && codecept run acceptance
