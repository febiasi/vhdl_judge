-- 1234567 Bruno Albertini / Felipe Biasi
-- 4 testes -  testbench.vhdl
-- exemplo de teste sharif-judge
entity testbench is end;

library IEEE;
use IEEE.std_logic_1164.all;

library STD;
use STD.textio.all;

architecture stim of testbench is
	component pcs7400 is
			port( E1, E2, E4, E5, E9, E10, E12, E13: in std_logic;
					S3, S6, S8, S11: out std_logic);
	end component pcs7400;

	-- sinais usados para injetar os casos de teste
	signal entradas: std_logic_vector(1 to 2);
	signal saidas  : std_logic_vector(1 to 4);

	begin

	uut: pcs7400 port map (
			--como as portas sao identicas, injeta-se o mesmo sinal em todas
			--o vetor de saida contem uma posicao por porta
			E1=>entradas(1), E2=>entradas(2), S3=>saidas(1),
			E4=>entradas(1), E5=>entradas(2), S6=>saidas(2),
			E9=>entradas(1), E10=>entradas(2), S8=>saidas(3),
			E12=>entradas(1), E13=>entradas(2), s11=>saidas(4)
	);

	tb: process
			variable l : line;
			variable count : integer := 0;
			begin
					--simulacao caso 00
					entradas <= "00";
					wait for 15 ns;
					if (saidas /= "1111") then
							write(l, string'("O teste 00 falhou."));
							writeline(output, l);
							count := count + 1;
					end if;

					--simulacao caso 01
					entradas <= "01";
					wait for 15 ns;
					if (saidas /= "1111") then
							write(l, string'("O teste 01 falhou."));
							writeline(output, l);
							count := count + 1;
					end if;

					--simulacao caso 10
					entradas <= "10";
					wait for 15 ns;
					if (saidas /= "1111") then
							write(l, string'("O teste 10 falhou."));
							writeline(output, l);
							count := count + 1;
					end if;

					--simulacao caso 11
					entradas <= "11";
					wait for 15 ns;
					if (saidas /= "0000") then
							write(l, string'("O teste 11 falhou."));
							writeline(output, l);
							count := count + 1;
					end if;

					if (count = 0) then
						write(l, string'("OK"));
						writeline (output, l);
					end if;
					wait;
			end process;

end architecture stim;

				
