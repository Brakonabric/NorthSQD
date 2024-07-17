#!/bin/bash

# Check if the correct number of arguments are provided
if [ "$#" -ne 2 ]; then
    echo "Usage: $0 old_prefix new_prefix"
    exit 1
fi

old_prefix=$1
new_prefix=$2
directory=$(dirname "$0")

# Loop through all .png files in the directory
for file in "$directory"/*.png; 
do
    # Get the base name of the file
    filename=$(basename "$file")
    
    # Check if the file starts with the old prefix
    if [[ "$filename" == "$old_prefix"* ]]; then
        # Replace the old prefix with the new prefix
        new_filename="${new_prefix}${filename#$old_prefix}"
        # Get the full path for the new filename
        new_file="$directory/$new_filename"
        # Rename the file
        mv "$file" "$new_file"
        echo "Renamed: $filename -> $new_filename"
    fi
done

