@echo off

REM set service="postgresql-x64-18"
set service="Apache2.4"

echo Configuring service: %service%
echo Choose from "start", "end", "restart". Enter "exit", if exit needed.

:loop
set /p Choise=">"
if "%Choise%"=="start" (
	net start %service%
) else (
	if "%Choise%"=="end" (
		net stop %service%
	) else (
		if "%Choise%"=="restart" (
			net stop %service%
			net start %service%
		) else (
			if "%Choise%"=="exit" (
				goto end
			)
		)
	)
)
goto loop
:end
exit