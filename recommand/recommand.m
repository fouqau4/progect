#!/usr/bin/octave
cd /var/www/html/project/recommand;
load('parameter/best_ver2');
data = load('data/mysuits_data');
result = sigmoid( [ ones( size( data, 1 ), 1 ) sigmoid( [ ones( size( data, 1 ), 1 ) data ] * Theta1' ) ] * Theta2' );
save data/1 result
