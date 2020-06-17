const path = require('path');
const webpack = require('webpack');

const HtmlWebPackPlugin = require('html-webpack-plugin');

/* Log */
const WebpackStylish = require('webpack-stylish'); // 번들링 시 log 깔끔하게
const FriendlyErrors = require('friendly-errors-webpack-plugin'); // 번들링 에러 log

/* Stats */
const WebpackVisualizer = require('webpack-visualizer-plugin'); // 번들링 결과 분석

/* Minfiy */
const TerserPlugin = require('terser-webpack-plugin');

module.exports = (env, argv) => {
	const config = {
		mode: argv.mode,
		entry: {
			app: path.resolve(__dirname, 'src/index.tsx'),
		},
		output: {
			path: path.resolve(__dirname, './public/dist'),
			filename: argv.mode === 'development' ? '[name].js' : '[name].[chunkhash].js',
			chunkFilename: argv.mode === 'development' ? '[id].js' : '[id]_[chunkhash].js',
		},
		resolve: {
			extensions: ['.ts', '.tsx', '.js', '.json', '.css'],
			alias: {
				Component: path.resolve(__dirname, 'src/component/'),
				Lib: path.resolve(__dirname, 'src/lib/'),
			},
		},
		optimization: {
			usedExports: true,
			splitChunks: {
				// initial - static 파일만 분리 | async 동적로딩파일만 분리 | all 모두 분리
				chunks: 'async',
				minSize: 30000,
				minChunks: 1,
				maxAsyncRequests: 5, // 병렬 요청 chunk 수
				maxInitialRequests: 3, // 초기 페이지로드 병령 요청 chunk 수
				automaticNameDelimiter: '_', // vendor, default 등 prefix 구분문자 (default : '~')
				name: true, // development 모드일 때 파일에 청크이름 표시 여부
				cacheGroups: {
					default: {
						minChunks: 2, // 2개 이상의 chunk
						priority: -20,
						reuseExistingChunk: true, // minChunk 이상에서 사용할 경우 공통 사용
					},
					// axios, vue 같은 공통 모듈은 vendor로 관리
					vendors: {
						priority: -10,
						test: /[\\/]node_modules[\\/]/,
					},
				},
			},
			minimizer: [],
		},
		module: {
			rules: [
				{
					test: /\.(ts|tsx)$/,
					exclude: /node_modules/,
					use: {
						loader: 'babel-loader',
					},
				},
			],
		},
	};

	if (argv.mode === 'development') {
		config.plugins = [
			new webpack.NamedModulesPlugin(),
			new webpack.NamedChunksPlugin(),
			new HtmlWebPackPlugin({
				template: './public/index.html',
				filename: 'index.html',
			}),
		];

		config.devServer = {
			hot: true,
			host: 'localhost',
			contentBase: path.resolve(__dirname, 'dist'),
			stats: {
				color: true,
			},
		};
	} else {
		config.optimization = {
			minimize: true,
			minimizer: [
				new TerserPlugin({
					cache: true,
					parallel: true,
					sourceMap: true,
					terserOptions: {},
				}),
			],
		};

		config.plugins = [
			new HtmlWebPackPlugin({
				template: './public/index.html',
				filename: 'index.html',
			}),
		];
	}

	// if (env.prettier) {
	// 	config.plugins.unshift(new WebpackStylish());
	// 	config.plugins.unshift(new FriendlyErrors());

	// 	config.stats = 'none';
	// }

	// if (env.stats) {
	// 	config.plugins.push(new WebpackVisualizer());
	// }

	return config;
};
