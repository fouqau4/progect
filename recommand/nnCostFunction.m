function [J grad] = nnCostFunction(nn_params, ...
                                   input_layer_size, ...
                                   hidden_layer_size, ...
                                   num_labels, ...
                                   X, y, lambda)
%NNCOSTFUNCTION Implements the neural network cost function for a two layer
%neural network which performs classification
%   [J grad] = NNCOSTFUNCTON(nn_params, hidden_layer_size, num_labels, ...
%   X, y, lambda) computes the cost and gradient of the neural network. The
%   parameters for the neural network are "unrolled" into the vector
%   nn_params and need to be converted back into the weight matrices. 
% 
%   The returned parameter grad should be a "unrolled" vector of the
%   partial derivatives of the neural network.
%

% Reshape nn_params back into the parameters Theta1 and Theta2, the weight matrices
% for our 2 layer neural network
Theta1 = reshape(nn_params(1:hidden_layer_size * (input_layer_size + 1)), ...
                 hidden_layer_size, (input_layer_size + 1));

Theta2 = reshape(nn_params((1 + (hidden_layer_size * (input_layer_size + 1))):end), ...
                 num_labels, (hidden_layer_size + 1));

% Setup some useful variables
m = size(X, 1);
         
% You need to return the following variables correctly 
J = 0;
Theta1_grad = zeros(size(Theta1));
Theta2_grad = zeros(size(Theta2));

% ====================== YOUR CODE HERE ======================
% Instructions: You should complete the code by working through the
%               following parts.
%
% Part 1: Feedforward the neural network and return the cost in the
%         variable J. After implementing Part 1, you can verify that your
%         cost function computation is correct by verifying the cost
%         computed in ex4.m
%
% Part 2: Implement the backpropagation algorithm to compute the gradients
%         Theta1_grad and Theta2_grad. You should return the partial derivatives of
%         the cost function with respect to Theta1 and Theta2 in Theta1_grad and
%         Theta2_grad, respectively. After implementing Part 2, you can check
%         that your implementation is correct by running checkNNGradients
%
%         Note: The vector y passed into the function is a vector of labels
%               containing values from 1..K. You need to map this vector into a 
%               binary vector of 1's and 0's to be used with the neural network
%               cost function.
%
%         Hint: We recommend implementing backpropagation using a for-loop
%               over the training examples if you are implementing it for the 
%               first time.
%
% Part 3: Implement regularization with the cost function and gradients.
%
%         Hint: You can implement this around the code for
%               backpropagation. That is, you can compute the gradients for
%               the regularization separately and then add them to Theta1_grad
%               and Theta2_grad from Part 2.
%

X = [ ones( m, 1 ) X ];

Y = zeros( m, num_labels );
%for temp_i = 1 : m
%    Y( temp_i, y( temp_i ) ) = 1;
%end
Y = y;
HOfTheta = sigmoid( [ ones( m, 1 ) sigmoid( X * Theta1' ) ] * Theta2' );
J = ( 1 / m ) * sum( sum( -Y .* log( HOfTheta ) -( 1 - Y ) .* log( 1 - HOfTheta ), 2 ) );
%---------------------------------------------------------------------------------------------------
temp_T1 = Theta1;
temp_T1( :, 1 ) = 0;
temp_T2 = Theta2;
temp_T2( :, 1 ) = 0;
J = J + lambda / ( 2 * m ) * ( sum( sum( temp_T1 .^ 2, 2 ) ) + sum( sum( temp_T2 .^ 2, 2 ) ) );
%---------------------------------------------------------------------------------------------------
A1 = X; %5000x401
Z2 = X * Theta1'; % 5000x401 x 401x25 = 5000x25
A2 = [ ones( m, 1 ) sigmoid( Z2 ) ]; % 5000x26
Z3 = A2 * Theta2'; % 5000x26 x 26x10 = 5000x10
A3 = sigmoid( Z3 ); % 5000x10

Delta3 = A3 - Y; % 5000x10
Delta2 = Delta3 * Theta2 .* [ ones( m, 1 ) sigmoidGradient( Z2 ) ]; %5000x10 * 10x26 + 5000x26 = 5000x26
Delta2 = Delta2( :, 2 : end ); % 5000x25

Theta1_grad = Delta2' * A1;
Theta2_grad = Delta3' * A2;

%for temp_i = 1 : m
%    a_1 = X( temp_i, : );	% 1x401
%    z_2 = Theta1 * a_1';		%25x401 x 401x1 = 25x1
%    a_2 = [ 1; sigmoid( z_2 ) ];%26x1
%    z_3 = Theta2 * a_2;		%10x26 x 26x1 = 10x1
%    a_3 = sigmoid( z_3 );	%10x1
%
%    delta_3 = a_3 - Y( temp_i, : )';	%10x1
%    delta_2 = Theta2' * delta_3 .* [ 1; sigmoidGradient( z_2 ) ];%26x10 x 10x1 .* 26x1 = 26x1
%    delta_2 = delta_2( 2 : end ); % 25x1
%
%    Theta1_grad = Theta1_grad + delta_2 * a_1; % 25x1 x 1x401 = 25x401
%    Theta2_grad = Theta2_grad + delta_3 * a_2'; % 10x1 x 1x26 = 10x26
%end

Theta1_grad = 1 / m * Theta1_grad + lambda / m * [ zeros( size( Theta1, 1 ), 1 ) Theta1( :, 2 : end ) ];
Theta2_grad = 1 / m * Theta2_grad + lambda / m * [ zeros( size( Theta2, 1 ), 1 ) Theta2( :, 2 : end ) ];
% ------------------------------------------------------------

% =========================================================================

% Unroll gradients
grad = [Theta1_grad(:) ; Theta2_grad(:)];


end
%----------------------REFERENCE------------------------------------
% 1. http://stackoverflow.com/questions/21441457/neural-network-cost-function-in-matlab
% 2. https://github.com/schneems/Octave/blob/master/mlclass-ex4/mlclass-ex4/nnCostFunction.m
% 3. https://swizec.com/blog/i-suck-at-implementing-neural-networks-in-octave/swizec/2929

