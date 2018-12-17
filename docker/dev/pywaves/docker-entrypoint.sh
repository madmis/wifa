#!/usr/bin/env bash

set -e

export FLASK_ENV=development
export FLASK_APP=app.py

python -m flask run