const webpack = require("webpack");
const AssetsPlugin = require("assets-webpack-plugin");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const config = {
    entry: {
        main: ["./src/entries/main.js"],
    },
    output: {
        path: path.resolve(__dirname, "assets"),
        publicPath: "/assets/",
        filename: "[name].min.js",
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [MiniCssExtractPlugin.loader, "css-loader"],
            },
            {
                test: /\.scss$/,
                use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
            },
            {
                test: /\.js$/,
                use: "babel-loader",
                exclude: /node_modules/,
            },
            {
                test: /\.(png|jpg|gif)$/,
                type: "asset/resource",
                generator: {
                    filename: "./img/[name][ext]",
                },
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin(),
        new AssetsPlugin({
            filename: "assets.json",
        }),
    ],
};

module.exports = config;