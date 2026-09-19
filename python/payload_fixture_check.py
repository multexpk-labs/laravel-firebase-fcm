#!/usr/bin/env python3
import json
import sys

def validate(payload):
    if not isinstance(payload, dict):
        return False
    title = payload.get('title')
    return isinstance(title, str) and bool(title.strip())

if __name__ == '__main__':
    payload = json.loads(sys.stdin.read())
    print('valid' if validate(payload) else 'invalid')
