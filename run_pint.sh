#!/bin/bash

files=$(head -n 1 ${arg})

vendor/bin/pint ${files} --test