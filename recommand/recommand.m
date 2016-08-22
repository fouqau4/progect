load('parameter/best');
data = load('data/mysuits_data');
result = sigmoid( [ ones( size( data, 1 ), 1 ) sigmoid( [ ones( size( data, 1 ), 1 ) data ] * Theta1' ) ] * Theta2' );
save data/myscore result
