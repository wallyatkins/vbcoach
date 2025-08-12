#!/bin/bash
# Stop the test server

PID_FILE="api/tests/server.pid"

if [ -f "$PID_FILE" ]; then
    PID=$(cat "$PID_FILE")
    echo "Stopping test server with PID $PID..."
    # Kill the process
    kill $PID
    # Clean up the pid and port files
    rm "$PID_FILE"
    if [ -f "api/tests/server.port" ]; then
        rm "api/tests/server.port"
    fi
    echo "Test server stopped."
else
    echo "PID file not found. Server may not be running."
fi
