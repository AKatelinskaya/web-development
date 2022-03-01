PROGRAM PrintHello(INPUT, OUTPUT);
USES
  Dos;

VAR
  Result: STRING;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  QueryStr: STRING;
BEGIN
  WRITELN(GetEnv('QUERY_STRING'));
  //Найти позицию key (pos) 
END. 

BEGIN {PrintHello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  

  Result = GetQueryStringParameter('age');

  //
END. {PrintHello}
