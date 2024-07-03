<?php
session_start();
include_once 'conexao.php';
include_once 'funcoes.php';
include_once('../html/nav.html');

$b = new Biblioteca();

?>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Colorlib Templates">
<meta name="author" content="Colorlib">
<meta name="keywords" content="Colorlib Templates">

<title>Cadastro de novos livros</title>

<style id="" media="all">/* cyrillic-ext */

    #genero{background:0 0;line-height:38px;border:1px solid #ccc;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;color:#666;font-size:15px;-webkit-transition:all .4s ease;-o-transition:all .4s ease;-moz-transition:all .4s ease;transition:all .4s ease;padding:0 20px}
    #genero::{color:#999}
    #genero:{color:#999;opacity:1}
    #genero::{color:#999;opacity:1}
    #genero:{color:#999}
    #genero: {color:#999}
    #genero:focus{-webkit-box-shadow:0 1px 5px 0 rgba(0,0,0,.15);-moz-box-shadow:0 1px 5px 0 rgba(0,0,0,.15);box-shadow:0 1px 5px 0 rgba(0,0,0,.15);-webkit-transform:translateY(-3px);-moz-transform:translateY(-3px);-ms-transform:translateY(-3px);-o-transform:translateY(-3px);transform:translateY(-3px)}

    #icone {all: unset;cursor: pointer; outline: revert; padding: 0px 10% 0px 95%;}
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtE6F15M.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWvU6F15M.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtU6F15M.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuk6F15M.woff2) format('woff2');
        unicode-range: U+0370-03FF;
        }
        /* hebrew */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWu06F15M.woff2) format('woff2');
        unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtk6F15M.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWt06F15M.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuU6F.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtE6F15M.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWvU6F15M.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtU6F15M.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuk6F15M.woff2) format('woff2');
        unicode-range: U+0370-03FF;
        }
        /* hebrew */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWu06F15M.woff2) format('woff2');
        unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtk6F15M.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWt06F15M.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuU6F.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtE6F15M.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWvU6F15M.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtU6F15M.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuk6F15M.woff2) format('woff2');
        unicode-range: U+0370-03FF;
        }
        /* hebrew */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWu06F15M.woff2) format('woff2');
        unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtk6F15M.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWt06F15M.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuU6F.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtE6F15M.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWvU6F15M.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtU6F15M.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuk6F15M.woff2) format('woff2');
        unicode-range: U+0370-03FF;
        }
        /* hebrew */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWu06F15M.woff2) format('woff2');
        unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtk6F15M.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWt06F15M.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuU6F.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtE6F15M.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWvU6F15M.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtU6F15M.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuk6F15M.woff2) format('woff2');
        unicode-range: U+0370-03FF;
        }
        /* hebrew */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWu06F15M.woff2) format('woff2');
        unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWtk6F15M.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWt06F15M.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memtYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWqWuU6F.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');
        unicode-range: U+0370-03FF;
        }
        /* hebrew */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');
        unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');
        unicode-range: U+0370-03FF;
        }
        /* hebrew */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');
        unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');
        unicode-range: U+0370-03FF;
        }
        /* hebrew */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');
        unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');
        unicode-range: U+0370-03FF;
        }
        /* hebrew */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');
        unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu1aB.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu1aB.woff2) format('woff2');
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu1aB.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu1aB.woff2) format('woff2');
        unicode-range: U+0370-03FF;
        }
        /* hebrew */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu1aB.woff2) format('woff2');
        unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu1aB.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu1aB.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        font-stretch: 100%;
        font-display: swap;
        src: url(/fonts.gstatic.com/s/opensans/v34/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-muw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
</style>

<link href="../css/estiloAdiciona.css" rel="stylesheet" media="all">
<meta name="robots" content="noindex, follow">
<script nonce="369495b1-5525-4e8d-b146-9ef1a2133718">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<div class="page-wrapper p-t-100 p-b-50" style="background-color:#1a293d;">
<div class="wrapper wrapper--w900">
<div class="card card-6">
<div class="card-heading" style="border-color: transparent;">
<h2 class="title">Dados do Livro</h2>
</div>
<div class="card-body">
<form action=" " method="post">
<div class="form-row">
<div class="name">TÍTULO</div>
<div class="value">
<input id="titulo" class="input--style-6" type="text" name="titulo">
</div>
</div>
<div class="form-row">
<div class="name">GÊNERO</div>
<div class="value">
<div class="input-group">
<select name="genero" class="input--style-6" style=" height: 45px; width: 100%;">
      <option value="" >Selecione o gênero do livro</option>
      <option value="CFAN">Fantasia</option>
        <option value="CFIC">Ficção Cientifíca</option>
        <option value="CACO">Ação</option>
        <option value="CROM">Romance</option>
        <option value="CLGB">LGBTQIA+</option>
        <option value="CINF">Infantil</option>
        <option value="CSUS">Suspense</option>
        <option value="CBIO">Biografia</option>
        <option value="CGAS">Gastronomia</option>
        <option value="CAJD">Autoajuda</option>
        <option value="CTER">Terror</option>
        <option value="CFAM">Família</option>
        <option value="CREL">Religião e Espiritualidade</option>
        <option value="CCIE">Ciência</option>
        <option value="CTEC">Tecnologia</option>
        <option value="COUT">Outros</option>
      </select>

</div>
</div>
</div>
<div class="form-row">
    <div class="name">ISBN</div>
    <div class="value">
    <div class="input-group">
    <input id="ISBN" class="input--style-6" type="text" name="ISBN">
    </div>
    </div>
</div>
<div class="form-row">
    <div class="name">IDIOMA</div>
    <div class="value">
    <div class="input-group">
    <input id="idioma" class="input--style-6" type="text" name="idioma">
    </div>
    </div>
</div>
<div class="form-row">
    <div class="name">Nº DE PÁGINAS </div>
    <div class="value">
    <div class="input-group">
    <input id="paginas" class="input--style-6" type="number" name="paginas">
    </div>
    </div>
</div>
<div class="form-row">
    <div class="name">AUTOR</div>
    <div class="value">
    <div class="input-group">
    <input id="autor" class="input--style-6" type="text" name="autor">
    </div>
    </div>
</div>
<div class="form-row">
    <div class="name">EDIÇÃO</div>
    <div class="value">
    <div class="input-group">
    <input id="edicao" class="input--style-6" type="number" name="edicao">
    </div>
    </div>
</div>
<div class="form-row">
    <div class="name">EDITORA</div>
    <div class="value">
    <div class="input-group">
    <input id="editora" class="input--style-6" type="text" name="editora">
    </div>
    </div>
</div>
<div class="form-row">
    <div class="name">DESCRIÇÃO</div>
    <div class="value">
    <div class="input-group">
    <textarea id="descricao" class="input--style-6" type="text" name="descricao">
    Insira aqui uma breve descrição sobre o Livro
    </textarea>
    </div>
    </div>
</div>
<div class="form-row">
    <div class="name">Capa</div>
    <div class="value">
    <div class="input-group">
    <input id="capa" class="input--style-6" type="text" name="capa" placeholder="Insira aqui o link da capa">
    </div>
    </div>
<?php
   
   if(isset($_POST['titulo']) && !empty($_POST['titulo']) && 
 isset($_POST['autor']) && !empty($_POST['autor']) &&
 isset( $_POST['editora']) && !empty($_POST['editora']) &&
 isset( $_POST['edicao']) && !empty($_POST['edicao']) &&
 isset( $_POST['genero']) && !empty($_POST['genero'] &&
 isset( $_POST['ISBN']) && !empty($_POST['ISBN']))){
   $titulo = $_POST['titulo'];
   $ISBN = $_POST['ISBN'];
   $idioma = $_POST['idioma'];
   $paginas = $_POST['paginas'];
   $edicao = $_POST['edicao'];
   $autor = $_POST['autor'];
   $editora = $_POST['editora'];
   $genero = $_POST['genero'];
   $capa = $_POST['capa'];
   $descricao = $_POST['descricao'];

   if($b->larry($titulo, $ISBN,$idioma,$paginas, $edicao, $autor, $editora, $genero, $capa,$descricao) == true){
    echo '<p>Arquivo enviado com sucesso!</p>';
   }else 'Erro';

 }
     
?>
</div>
</div>
<div class="card-footer">
<button type="submit" id="icone"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg>Enviar<button>
</div>
</form>
</div>
</div>
</div>
</div>


<script src="../vendor/jquery.min.js"></script>

<script src="../js/global.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7592f9f5d8054293","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}' crossorigin="anonymous"></script>
</body>
</html>