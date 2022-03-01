PROGRAM PrintHello(INPUT, OUTPUT);
USES
  Dos;

VAR
  QueryString, Name: STRING;
  FirstCh, LastCh: INTEGER;

BEGIN
  WRITELN('Content-Type: text/plain');

  WRITELN;
                            
  QueryString := GetEnv('QUERY_STRING');
  FirstCh := Pos('=', QueryString) + 1;  
  LastCh := Length(QueryString);
  Name := Copy(QueryString, FirstCh, LastCh);

  IF Name <> ''
  THEN
    WRITELN('Hello dear, ', Name , '!')
  ELSE
    WRITELN('Hello Anonymous!')

END.
