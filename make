#!/bin/sh

# clean output
rm -rf output
mkdir output

# copy in static resources
cp -r static/. output

# copy in test and release builds
mkdir -p output/build
cp -r build/release/. output/build/release/
cp -r build/test/. output/build/test/


# create static html pages from the php templates
./make-pages
