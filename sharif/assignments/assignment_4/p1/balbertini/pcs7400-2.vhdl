-- 1234567 Bruno Albertini
-- pcs7400.vhdl
-- exemplo de solucao com erro de lógica
library ieee;
use ieee.std_logic_1164.all;

entity pcs7400 is
        port( E1, E2, E4, E5, E9, E10, E12, E13: in std_logic;
                S3, S6, S8, S11: out std_logic);
end entity pcs7400;

architecture temporizada of pcs7400 is
begin
        --porta nand 1
        S3 <= not(E1 or E2) after 10 ns;
        --porta nand 2
        S6 <= not(E4 and E5) after 10 ns;
        --porta nand 3
        S8 <= not(E9 and E10) after 10 ns;
        --porta nand 4
        S11 <= not(E12 and E13) after 10 ns;
end architecture temporizada;