#!/usr/bin/env bash

set -e

export FLASK_ENV=development
export FLASK_APP=app.py

#python -m flask run --host=0.0.0.0 --port=5000
gunicorn -b "wifa.pywaves:5000" --access-logfile - "app:app"