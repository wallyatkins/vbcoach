#!/bin/bash
# Find an available port and start the test server

while true; do
    # Pick a random port from the ephemeral range
    PORT=$(shuf -i 49152-65535 -n 1)
    # Check if the port is already in use.
    # ss is a modern tool that is generally faster than netstat.
    # The "!" inverts the exit code, so the block runs if grep finds nothing.
    if ! ss -lnt | grep -q ":$PORT"; then
        break # Exit the loop if the port is free
    fi
done

# Start the PHP server in the background on the found port
APP_ENV=test php -S localhost:$PORT -t api/public >/dev/null 2>&1 &
PID=$!

# Save the PID and port for other scripts
echo $PID > api/tests/server.pid
echo $PORT > api/tests/server.port

echo "Test server started on port $PORT with PID $PID"
