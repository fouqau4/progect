#include <stdio.h>
#include <stdlib.h>

int main( int argc, char* argv[] )
{
	FILE *tops, *bottoms, *outfile;
	int temp_tops[1000], temp_bottoms[1000];
	if( ( tops = fopen( argv[1], "r" ) ) == NULL )
	{
		printf( "[error] : fail to open \'%s\'\n", argv[1] );
		exit( 1 );
	}
	int topsNum = 0;
	while( fscanf( tops, "%d", &temp_tops[topsNum] ) == 1 ) 
		topsNum++;
	fclose( tops );	

	if( ( bottoms = fopen( argv[2], "r" ) ) == NULL )
	{
		printf( "[error] : fail to open \'%s\'\n", argv[2] );
		exit( 1 );
	}

	int bottomsNum = 0;
	while( fscanf( bottoms, "%d", &temp_bottoms[bottomsNum] ) == 1 )
		bottomsNum++;
	fclose( bottoms );
	
	if( ( outfile = fopen( argv[3], "w" ) ) == NULL )
	{
		printf( "[error] : fail to create \'%s\'\n", argv[3] );
		exit( 1 );
	}
	int temp_i, temp_i1;
	for( temp_i = 0 ; temp_i < topsNum ; temp_i++ )
	{
		for( temp_i1 = 0 ; temp_i1 < bottomsNum ; temp_i1++ )
		{
			fprintf( outfile, "%d_%d\n", temp_tops[temp_i], temp_bottoms[temp_i1] );
		}
	}
	fclose( outfile );
	return 0;
}
