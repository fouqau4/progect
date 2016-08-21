load('parameter/best');
data = load('data/mysuits_data');
size(data)
size(Theta1')
sigmoid( [ ones( size( data, 1 ), 1 ) sigmoid( [ ones( size( data, 1 ), 1 ) data ] * Theta1' ) ] * Theta2' )
