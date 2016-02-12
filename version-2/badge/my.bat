set OPTIONS=-tsa none
set CERT_FILE="flexvideochat.p12"
set CERT_PASS=fd
set SIGNING_OPTIONS=-storetype pkcs12 -keystore %CERT_FILE% -storepass %CERT_PASS%
set OUTPUT=flexvideochat.air
set APP_XML=application.xml
::set FILE_OR_DIR=-C bin .
set FILE_OR_DIR=flexvideochat.swf

call adt -package %OPTIONS% %SIGNING_OPTIONS% %OUTPUT% %APP_XML% %FILE_OR_DIR%
