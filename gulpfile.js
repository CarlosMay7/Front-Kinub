const { src, dest, watch, series } = require("gulp");
//CSSS y SASS
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const cssnano = require("cssnano");

function css(){
    return src("src/scss/app.scss") //De donde toma el archivo a compilar
        .pipe(sourcemaps.init()) //Inicia el sourcemap
        .pipe(sass(/*{outputStyle: "compressed"}*/)) //Compila, como argumentos puede recibir un objeto con valores como el tipo de output
        .pipe(postcss([autoprefixer(), /*cssnano()*/]))
        .pipe(sourcemaps.write(".")) //Lo guarda en la misma ubicacion con el .
        .pipe( dest("build/css")); //Donde lo guarda
}

function dev(){
    watch("src/scss/**/*.scss", css); //Archivo al que va a estar atento y la funcion que ejecuta cuando cambie
    //El ** es para decir cualquier nombre y *.scss es que termine con .scss
}

exports.css = css;
exports.dev = dev;
exports.default = series(css, dev);