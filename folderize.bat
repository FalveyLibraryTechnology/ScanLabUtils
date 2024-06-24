@echo off
if %1!==! goto loop
SET raw=%1
SET dir=%raw:~0,-4%
mkdir "%dir%"
move "%1" "%dir%"
goto end
:loop
  for %%a in (*.pdf *.tif *.tiff) do %0 %%a
:end