#!/bin/sh

BUILD_FOLDER="./assets/js"
CONCAT_FILE="${BUILD_FOLDER}/concatenated.js"

# SOURCE
SOURCE_FOLDER="./assets/source/js"
FINAL_FILE="${BUILD_FOLDER}/main.js"

# uncompressed
#find $SOURCE_FOLDER -iname "*.js" -maxdepth 1 -exec cat "{}" \; > $FINAL_FILE

# compressed
find $SOURCE_FOLDER -iname "*.js" -exec cat "{}" \; > $CONCAT_FILE
java -jar /Applications/yuicompressor.jar --type js $CONCAT_FILE -o $FINAL_FILE
rm -f $CONCAT_FILE

# One off builds
for FOLDER in `find $SOURCE_FOLDER -type d`
do
    FOLDER_NAME=`basename ${FOLDER}`
    if [ $FOLDER_NAME != 'javascript' ]; then
        find $FOLDER -iname "*.js" -exec cat "{}" \; > "${BUILD_FOLDER}/${FOLDER_NAME}.js"
    fi
done