const gulp =require('gulp')
    sass=require('gulp-sass'),
    autoprefixer=require('gulp-autoprefixer');

    gulp.task('sass',()=>
        gulp.src('./dev/scss/style.scss')
        .pipe(sass({
            outputStyle:'expanded'
            
        }))
        .pipe(autoprefixer({
            versions:['last 2 browsers']
        }))
        
        .pipe(gulp.dest('./public/assets/css'))    
    );

    gulp.task('default',()=>{
        gulp.watch("./dev/scss/**/*.scss", gulp.series("sass"));
    });