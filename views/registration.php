<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@500" />
    <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">

    <title>Registrazione</title>
</head>

<body>

    <?php
    session_start();
    $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
    unset($_SESSION['message']);
    ?>

    <?php if ($message) : ?>
        <p><?php echo $message; ?></p>
        <p><a href="./registration.php">Torna Indietro</a></p>
        <p><a href="../index.php">Vai alla pagina di Login</a></p>
    <?php else : ?>

        <div id="firejet-html-app">
            <div class="registrazione-box_143171x">
                <div class="registrazione-rectangle-2x">
                    <div class="registrazione-layout-32">
                        <div class="registrazione-vector-4x-1">
                            <div class="">
                                <div class="registrazione-vector-4x">
                                    <svg width="100%" height="100%" preserve-aspect-ratio="none" view-box="0 0 1440 433" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M 488.772 199.429 C 281.838 125.104 291.158 -34.878 -52.836 7.296 L-120.693 422.193 L 1422.4 630.732 C 1432.33 576.156 1460.02 415.457 1491.34 209.267 C 1394.73 318.23 695.707 273.754 488.772 199.429 Z" fill="#CBDAEC" />
                                    </svg>
                                </div>
                            </div>
                            <div class="registrazione-layout-33">
                                <div class="registrazione-vector-5x-1">
                                    <div class="registrazione-vector-5x">
                                        <svg width="100%" height="100%" preserve-aspect-ratio="none" view-box="0 0 1440 226" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M 1333.21 30.897 C 1794.82 -45.248 2276.07 37.097 2459 87.787 V 226 L-499.505 211.778 C-501.388 193.544 -504.023 139.936 -499.505 71.376 C-351.721 111.856 756.189 126.078 1333.21 30.897 Z" fill="#B8CCE4" />
                                        </svg>
                                    </div>
                                    <div class="registrazione-hai-gi-un-account">
                                        <p class="registrazione-hai-gi-un-account-text-0x">
                                            Hai già un account
                                        </p>
                                        <p class="registrazione-accedi-text-1x">? Accedi</p>
                                    </div>
                                    <p class="registrazione-registrati">REGISTRATI</p>
                                    <div class="registrazione-box_174179x">
                                        <div class="registrazione-polygon-1x">
                                            <svg width="100%" height="100%" preserve-aspect-ratio="none" view-box="0 0 65 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M 32.5 0 L 64.11 63 H 0.89 L 32.5 0 Z" fill="white" />
                                            </svg>
                                        </div>
                                        <div class="registrazione-ellipse-11x"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="registrazione-layout-34">
                                <div class="registrazione-vector-1x-1">
                                    <div class="registrazione-vector-1x">
                                        <svg width="100%" height="100%" preserve-aspect-ratio="none" view-box="0 0 1440 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M 550.04 20.78 C 309.334 -30.432 58.386 24.95 -37 59.042 V 152 L 1505.7 142.434 C 1506.68 130.171 1508.06 94.116 1505.7 48.005 C 1428.64 75.23 850.923 84.796 550.04 20.78 Z" fill="white" />
                                        </svg>
                                    </div>
                                    <div class="registrazione-box_176178177x">
                                        <div class="registrazione-vector-2x">
                                            <svg width="100%" height="100%" preserve-aspect-ratio="none" view-box="0 0 20 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M 0 18.868 L 20 0 V 32.145 L 0 58 V 18.868 Z" fill="white" />
                                            </svg>
                                        </div>
                                        <div class="registrazione-rectangle-1084x"></div>
                                        <div class="registrazione-vector-3x">
                                            <svg width="100%" height="100%" preserve-aspect-ratio="none" view-box="0 0 20 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M 20 18.868 L 0 0 V 32.145 L 20 58 V 18.868 Z" fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="registrazione-layout-35">
                                <div class="registrazione-rectangle-1083x">
                                    <div class="registrazione-ellipse-11x-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="registrazione-layout-36">
                        <div class="registrazione-rectangle-1x">
                            <div class="registrazione-group-181x">
                                <svg width="100%" height="100%" preserve-aspect-ratio="none" view-box="0 0 124 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M 63.858 17.119 V 19.076 H 50.945 C 51.442 18.627 51.691 17.954 51.691 16.67 V 3.3 C 51.691 2.025 51.442 1.352 50.945 0.894 H 63.585 V 2.875 C 63.136 2.402 62.559 2.178 61.259 2.178 H 57.041 V 8.498 H 59.96 C 60.767 8.575 61.574 8.362 62.238 7.896 V 10.35 C 61.574 9.885 60.767 9.671 59.96 9.749 H 57.041 V 17.817 H 61.516 C 62.783 17.817 63.385 17.593 63.834 17.119 H 63.858 Z" fill="#2D224C" />
                                    <path d="M 74.284 19.076 L 74.084 16.927 C 73.656 17.672 73.03 18.284 72.275 18.695 C 71.521 19.105 70.667 19.299 69.809 19.253 C 67.106 19.253 64.932 17.176 64.932 12.652 C 64.932 8.129 67.483 6.035 70.009 6.035 C 70.833 6.023 71.646 6.232 72.362 6.639 C 73.079 7.047 73.673 7.639 74.084 8.353 V 3.172 C 74.162 2.375 73.948 1.577 73.482 0.926 C 74.677 0.854 77.605 0.654 79.377 0.429 V 16.823 C 79.313 17.626 79.537 18.425 80.011 19.076 H 74.284 Z M 74.084 15.379 V 9.925 C 73.966 9.567 73.739 9.255 73.433 9.035 C 73.128 8.814 72.76 8.696 72.383 8.698 C 71.204 8.698 70.611 9.548 70.587 12.708 C 70.563 15.868 71.204 16.719 72.383 16.719 C 72.772 16.714 73.149 16.582 73.456 16.343 C 73.763 16.104 73.984 15.771 74.084 15.395 V 15.379 Z" fill="#2D224C" />
                                    <path d="M 90.1 19.076 L 89.972 16.927 C 89.59 17.672 88.998 18.288 88.27 18.702 C 87.542 19.115 86.709 19.306 85.874 19.253 C 83.051 19.253 81.864 17.649 81.864 14.657 V 8.522 C 81.91 8.196 81.88 7.864 81.776 7.552 C 81.671 7.24 81.495 6.957 81.262 6.725 C 83.083 6.645 85.208 6.42 87.157 6.228 V 14.818 C 87.157 15.82 87.406 16.646 88.432 16.646 C 88.709 16.637 88.978 16.548 89.204 16.388 C 89.431 16.228 89.606 16.006 89.707 15.748 V 8.53 C 89.754 8.204 89.724 7.872 89.62 7.56 C 89.515 7.248 89.339 6.965 89.106 6.733 C 90.935 6.653 93.06 6.428 95.009 6.236 V 16.823 C 94.933 17.626 95.143 18.429 95.602 19.093 L 90.1 19.076 Z" fill="#2D224C" />
                                    <path d="M 61.564 22.998 L 60.986 24.498 C 60.069 23.782 58.942 23.387 57.778 23.375 C 56.303 23.375 55.629 23.752 55.629 24.626 C 55.629 26.295 62.205 26.968 62.205 30.922 C 62.205 33.922 59.575 35.294 55.38 35.294 C 53.685 35.39 51.994 35.035 50.48 34.267 L 51.033 32.791 C 52.09 33.548 53.359 33.952 54.658 33.946 C 56.262 33.946 56.976 33.497 56.976 32.543 C 56.976 30.321 50.56 30.674 50.48 26.375 C 50.48 23.969 52.357 22.052 57.177 22.052 C 58.694 22.013 60.198 22.338 61.564 22.998 Z" fill="#2D224C" />
                                    <path d="M 77.605 28.701 C 77.605 32.278 74.934 35.326 70.386 35.326 C 65.574 35.326 63.168 32.502 63.168 28.701 C 63.168 25.132 65.871 22.084 70.386 22.084 C 75.134 22.052 77.605 24.875 77.605 28.701 Z M 68.782 28.701 C 68.782 33.329 69.207 34.315 70.386 34.315 C 71.565 34.315 71.99 33.345 71.99 28.701 C 71.99 24.057 71.589 23.135 70.386 23.135 C 69.183 23.135 68.782 24.049 68.782 28.701 Z" fill="#2D224C" />
                                    <path d="M 100.92 35.117 H 107.44 C 106.975 34.457 106.761 33.652 106.839 32.847 V 27.233 C 106.839 24.209 105.82 22.036 102.468 22.036 C 101.683 22.004 100.905 22.187 100.218 22.566 C 99.531 22.945 98.961 23.505 98.57 24.185 V 22.22 C 97.118 22.405 95.073 22.75 93.677 22.958 C 91.846 23.202 89.997 23.28 88.151 23.191 C 87.075 22.523 85.812 22.22 84.55 22.325 C 81.182 22.325 78.936 24.346 78.936 26.824 C 78.939 27.565 79.14 28.292 79.518 28.929 C 79.896 29.566 80.437 30.091 81.085 30.449 C 80.539 30.765 80.091 31.226 79.791 31.781 C 79.491 32.336 79.351 32.963 79.385 33.593 C 79.374 34.008 79.446 34.421 79.596 34.808 C 79.746 35.195 79.971 35.548 80.259 35.847 C 79.858 35.985 79.509 36.243 79.26 36.586 C 79.01 36.929 78.872 37.34 78.864 37.764 C 78.864 39.368 81.607 40.17 84.783 40.17 C 88.56 40.17 91.48 38.718 91.48 36.16 C 91.48 33.906 89.603 32.535 84.807 32.462 L 82.401 32.414 C 81.655 32.414 81.422 32.085 81.422 31.733 C 81.442 31.554 81.511 31.385 81.622 31.243 C 81.732 31.101 81.88 30.993 82.048 30.931 C 82.872 31.197 83.733 31.329 84.598 31.323 C 88.023 31.323 90.269 29.302 90.269 26.856 C 90.306 25.787 89.92 24.747 89.194 23.961 L 93.493 24.169 C 93.549 24.433 93.575 24.702 93.573 24.971 V 32.871 C 93.651 33.676 93.437 34.481 92.972 35.141 H 99.468 C 99.002 34.481 98.789 33.676 98.866 32.871 V 25.348 C 99.022 25.12 99.237 24.938 99.489 24.823 C 99.741 24.709 100.019 24.666 100.294 24.699 C 101.321 24.699 101.569 25.501 101.569 26.495 V 32.847 C 101.633 33.657 101.402 34.463 100.92 35.117 Z M 81.478 36.392 L 86.291 36.617 C 87.895 36.689 88.512 36.994 88.512 37.571 C 88.512 38.149 87.67 39.175 84.767 39.175 C 83.347 39.175 81.318 38.622 81.318 37.403 C 81.298 37.058 81.353 36.714 81.478 36.392 Z M 84.55 30.393 C 83.652 30.393 83.299 29.744 83.331 26.824 C 83.363 23.905 83.652 23.223 84.55 23.223 C 85.449 23.223 85.801 23.849 85.801 26.824 C 85.801 29.8 85.505 30.393 84.55 30.393 Z" fill="#2D224C" />
                                    <path d="M 123.136 28.701 C 123.136 32.278 120.457 35.326 115.918 35.326 C 111.106 35.326 108.699 32.502 108.699 28.701 C 108.699 25.132 111.394 22.084 115.918 22.084 C 120.658 22.052 123.136 24.875 123.136 28.701 Z M 114.314 28.701 C 114.314 33.329 114.739 34.315 115.918 34.315 C 117.097 34.315 117.522 33.345 117.522 28.701 C 117.522 24.057 117.121 23.135 115.918 23.135 C 114.715 23.135 114.338 24.049 114.314 28.701 Z" fill="#2D224C" />
                                    <path d="M 0 0.91 H 45.058 V 1.56 C 45.058 8.682 45.13 15.796 45.058 22.91 C 44.906 34.941 39.508 43.763 28.961 49.53 C 27.101 50.54 25.216 51.495 23.347 52.489 C 23.103 52.63 22.827 52.704 22.545 52.704 C 22.264 52.704 21.987 52.63 21.743 52.489 C 19.602 51.35 17.428 50.275 15.327 49.088 C 11.443 47.016 8.087 44.08 5.516 40.507 C 2.945 36.933 1.228 32.817 0.497 28.476 C 0.191 26.745 0.041 24.989 0.048 23.231 C-4.273e-07 16.013 0.048 8.794 0.048 1.576 L 0 0.91 Z M 2.35 3.236 V 3.766 C 2.35 10.254 2.35 16.743 2.35 23.231 C 2.353 24.614 2.458 25.994 2.663 27.361 C 3.188 31.178 4.548 34.831 6.647 38.061 C 8.746 41.292 11.532 44.019 14.806 46.049 C 17.212 47.581 19.77 48.776 22.272 50.107 C 22.365 50.147 22.465 50.167 22.565 50.167 C 22.666 50.167 22.765 50.147 22.858 50.107 C 24.013 49.522 25.136 48.888 26.299 48.311 C 29.75 46.721 32.871 44.495 35.498 41.75 C 40.064 36.919 42.629 30.536 42.676 23.889 C 42.772 17.184 42.676 10.479 42.676 3.774 C 42.676 3.605 42.676 3.429 42.676 3.236 H 2.35 Z" fill="#2D224C" />
                                    <path d="M 25.569 15.523 H 18.439 V 33.449 H 25.569 V 15.523 Z" fill="#2D224C" />
                                    <path d="M 18.324 22.133 L 13.46 20.395 L 9.38 31.815 L 14.244 33.553 L 18.324 22.133 Z" fill="#2D224C" />
                                    <path d="M 27.817 11.6 L 24.656 12.764 L 32.243 33.363 L 35.404 32.199 L 27.817 11.6 Z" fill="#2D224C" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="registrazione-layout-37">
                        <div class="registrazione-rectangle-9x">
                            <form action="../handlers/registration_handlers.php" method="post" class="registrazione-box_161164166186187188182183184162box_165168167169x">

                                <!-- nome -->
                                <p class="registrazione-inserisci-il-nome">Inserisci il nome</p>
                                <input class="registrazione-mario" placeholder="Mario" type="text" name="nome" required>
                                <div class="registrazione-line-1x"></div>

                                <!-- cognome -->
                                <p class="registrazione-inserisci-il-cognome">
                                    Inserisci il cognome
                                </p>
                                <input class="registrazione-rossi" placeholder="Rossi" type="text" name="cognome" required>
                                <div class="registrazione-line-4x"></div>

                                <!-- email -->
                                <p class="registrazione-inserisci-lemail">Inserisci l'email</p>
                                <input class="registrazione-name-example-com" placeholder="name@example.com" type="email" name="email" required>
                                <div class="registrazione-line-3x"></div>

                                <!-- password -->
                                <p class="registrazione-inserisci-la-passwor">
                                    Inserisci la password
                                </p>
                                <div class="registrazione-box_165168x">
                                    <input class="registrazione-scrivila-qui" type="password" name="password" placeholder="Scrivila qui" required>
                                    <div class="registrazione-vector">
                                        <svg width="100%" height="100%" preserve-aspect-ratio="none" view-box="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M 24.849 7.7 C 22.495 3.107 17.836 0 12.5 0 C 7.164 0 2.503 3.109 0.151 7.7 C 0.052 7.896 0 8.113 0 8.334 C 0 8.554 0.052 8.771 0.151 8.967 C 2.505 13.56 7.164 16.667 12.5 16.667 C 17.836 16.667 22.497 13.557 24.849 8.967 C 24.948 8.77 25 8.553 25 8.333 C 25 8.113 24.948 7.896 24.849 7.7 Z M 12.5 14.583 C 11.264 14.583 10.056 14.217 9.028 13.53 C 8 12.843 7.199 11.867 6.726 10.725 C 6.253 9.583 6.129 8.326 6.37 7.114 C 6.611 5.902 7.206 4.788 8.081 3.914 C 8.955 3.04 10.068 2.445 11.281 2.203 C 12.493 1.962 13.75 2.086 14.892 2.559 C 16.034 3.032 17.01 3.833 17.697 4.861 C 18.383 5.889 18.75 7.097 18.75 8.333 C 18.75 9.154 18.589 9.967 18.275 10.726 C 17.961 11.484 17.501 12.173 16.92 12.754 C 16.34 13.334 15.651 13.794 14.892 14.108 C 14.134 14.422 13.321 14.584 12.5 14.583 Z M 12.5 4.167 C 12.128 4.172 11.759 4.227 11.402 4.331 C 11.696 4.731 11.837 5.223 11.8 5.719 C 11.762 6.214 11.548 6.679 11.197 7.031 C 10.846 7.382 10.381 7.596 9.885 7.633 C 9.39 7.67 8.898 7.529 8.498 7.235 C 8.27 8.074 8.311 8.964 8.615 9.778 C 8.92 10.593 9.472 11.292 10.194 11.776 C 10.916 12.261 11.772 12.506 12.641 12.479 C 13.51 12.451 14.349 12.152 15.039 11.623 C 15.729 11.094 16.236 10.362 16.488 9.53 C 16.74 8.697 16.725 7.807 16.445 6.984 C 16.165 6.161 15.633 5.446 14.926 4.941 C 14.218 4.435 13.37 4.165 12.5 4.167 Z" fill="#0057FF" />
                                        </svg>
                                    </div>
                                </div>

                                <!-- registrati -->
                                <div class="registrazione-line-2x"></div>
                                <div class="registrazione-rectangle-10x">
                                    <input class="registrazione-registrati-1" type="submit" value="REGISTRATI">
                                </div>
                            </form>
                            <div class="registrazione-hai-gi-un-account-1">
                                <p class="registrazione-hai-gi-un-account-text-0x-1">
                                    Hai già un account
                                </p>
                                <p class="registrazione-accedi-text-1x-1">? Accedi</p>
                            </div>
                        </div>
                    </div>
                    <div class="registrazione-layout-38">
                        <p class="registrazione-crea-il-tuo-account">Crea il tuo account</p>
                    </div>
                    <div class="registrazione-layout-39">
                        <div class="registrazione-ellipse-12x"></div>
                    </div>
                    <div class="registrazione-layout-2">
                        <div class="registrazione-ellipse-13x">
                            <svg width="100%" height="100%" preserve-aspect-ratio="none" view-box="0 0 180 358" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1" cy="179" r="179" fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="registrazione-rectangle-1x-1"></div>
            </div>
        </div>

    <?php endif; ?>


</body>

</html>