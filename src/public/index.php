<?php
$conn = pg_connect("host=db dbname=postgres user=valerii password=qwerty");
if ($conn) {
    echo "Connected to PostgreSQL successfully!";
} else {
    echo "Connection failed.";
}
