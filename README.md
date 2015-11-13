# vhdl_judge

How to test VHDL files:

Name of the test file must be "testbench.vhdl".
It must contain the number os tests executed in the second line of comments in the beginnig of the file, like the example below:

-- 1234567 Bruno Albertini / Felipe Biasi
-- 4 testes - testbench.vhdl
-- exemplo de teste sharif-judge

If a test goes wrong it must print with writeline output the error, one line per error.
If nothing goes wrong, must print "OK", nothing else.

Until now, the score is calculated using each declared test as weight 1, following thisformula:

SCORE = (NTST - NLINES)/NTST

NTST = Number of tests declared
NLINES = Number of lines = number of tests with error

