<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">

    <title> Essaie carte interactive</title>

<!-- Styles -->
<style>
.map__image {
    width: 50%;
    float: left;
}

/* Couleur de remplissage */
.map__image path {
    fill: #a4ced2;
    /* Affiner les lignes */
    stroke: #FFF;
    stroke-width: 1px;
    transition: fill 0.3s;
}
.map__image path:hover {
    fill: #73e7a3;
}

.map__list {
    float: right;
    width: 50%;
}

.map__list a {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s;
}
.map__list a {
    color: #73e7a3;
    font-weight: bold;
    text-decoration: underline;
}
</style>
<!-- Styles -->

</head>
<body>
    <div class="map" id="map">
        <div class="map__image">
            <svg xmlns="http://www.w3.org/2000/svg"  viewBox=" 0 0 600 600 " >

{# Chemins des différentes communes #}
                <a id="commune-A" xlink:title="M'tsamboro" xlink:href="http://google.com/?q=A">
                    <path d="M28.259,89.48L29.239,88.5L47.919,88.99L51.109,86.8L52.939,87.13L55.29,79.65L54.299,77.85L57.14,77.11L59,77.11L63.419,70.76L58.56,62.12L55.939,62.12L51.85,57.7L54.799,56.39L68.39,59.67L73.839,58.71L78.679,52.81L78.679,41.79L81.5,39.65L84.439,32.23L93.779,28.87L96.239,23.63L94.029,21.17L94.35,17.49L99.35,19.94L103.64,20L104.419,17.71L108.52,15.77L114.5,6.9L117.979,11.02L117.979,12.74L113.109,14.87L111.31,22.98L117.33,24.84L116.39,27.97L97.299,32.39L89.189,37.88L89.109,39.52L91.819,42.47L101.399,43.04L96.879,54.74L89.029,75.06L103.83,106.19L101.56,112.52L44.419,106.19L31.939,93.29" stroke-width="1" stroke-linejoin="round" data-id="mtsamboro" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-B" xlink:title="Acoua" xlink:href="http://google.com/?q=B">
                    <path d="M101.549,112.66L99.35,141L48.899,145.58L14.779,163.76L14.87,162.69L15.279,157.86L19.54,154.59L19.739,151.9L37.679,134.16L26.75,125.44L10.31,125.77L10.049,122.69L15.089,122.1L20.5,115.06L22.199,114.3L28.839,101.08L24.909,95.12L28.259,89.48L44.419,106.19" stroke-width="1" stroke-linejoin="round" data-id="acoua" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer;"></path>
                </a>
                <a id="commune-C" xlink:title="Bandraboua" xlink:href="http://google.com/?q=C">
                    <path d="M99.35,141L145.979,174.22L199.649,187.87L181.739,142.42L177.39,131.39L166.6,131.84L165.089,129.99L161.14,130.75L161.979,127.99L156.89,124.53L154.659,113.46L145.02,102.32L146.6,95.05L148.959,93.61L155.25,95.32L155.179,88.18L153.089,87.72L152.04,89.29L139.319,85.1L137.729,83.32L128.85,79.79L124.989,71.08L127.839,67.92L124.79,64.4L121.06,63.22L119.989,60.28L111.959,60.28L110.6,58.1L110.319,54.43L114.799,50.63L114.129,49.04L109.209,48.77L103.109,46.92L101.399,43.04L89.029,75.06L103.83,106.19L101.56,112.52" stroke-width="1" stroke-linejoin="round" data-id="bandraboua" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-D" xlink:title="M'tsangamouji" xlink:href="http://google.com/?q=D">
                    <path d="M14.779,163.76L14.629,165.46L22.419,172.14L25.169,171.29L25.699,173.85L29.04,180.13L35.199,173.06L41.35,173.58L42.659,171.36L58.469,185.11L59.169,187.271L62.77,190.22L64.14,194.08L69.189,196.38L79.1,192.99L88.709,197.42L90.149,198.54L90.609,198.54L93.719,203.13L98.529,202.4L99.25,200.83L102.409,199.12L103.799,195.021L107.04,195.521L106.85,200.24L110.129,203.82L107.569,206.271L108.029,212.2L145.979,174.22L99.35,141L48.899,145.58" stroke-width="1" stroke-linejoin="round" data-id="mtsangamouji" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-E" xlink:title="Tsingoni" xlink:href="http://google.com/?q=E">
                    <path d="M145.979,174.22L199.649,187.87L219.8,188.39L220.238,201.19L212.06,217.09L201.679,234.29L189.439,252.3L157.339,263.44L132.439,256.7L107.54,251.97L105.64,251.87L106,246.42L110.259,243.45L115.779,242.92L118.179,240.85L117.459,238.8L101.739,237.64L100.359,230.89L95.52,225.46L95.189,222.9L106.979,217.2L107.35,212.88" stroke-width="1" stroke-linejoin="round" data-id="tsingoni" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer;"></path>
                </a>
                <a id="commune-F" xlink:title="Chiconi" xlink:href="http://google.com/?q=F">
                    <path d="M105.64,251.87L131.64,256.55L142.83,259.51L145.979,299.969L139.909,311.619L132,314.459L131.149,312.559L114.12,307.459L108.81,306.869L110.669,289.64L111.759,287.22L110.06,284.4L115.229,277.66L111.759,267.7L109.27,267.96L105.009,261.41" stroke-width="1" stroke-linejoin="round" data-id="chiconi" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer;"></path>
                </a>
                <a id="commune-G" xlink:title="Koungou" xlink:href="http://google.com/?q=G">
                    <path  d="M199.649,187.87L220.238,188.4L276.149,189.84L324.029,173.58L322.06,171.16L319.181,171.29L310.279,164.55L307.38,157.51L288.601,153.36L284.919,150.21L288.39,142.68L288.318,140.4L285.589,140.4L283.101,142.84L269.46,134.93L266.839,134.93L264.87,137.31L249.3,132.71L236.589,131.01L235.109,132.82L226.699,133.57L214.499,120.84L210.979,118.44L210.589,116.54L206.69,119.37L209.999,127.17L209.29,128.51L208.779,129.69L197.399,142.23L192.6,143.42L187.149,135.66L186.819,134.29L179.089,129.83L177.39,131.39" stroke-width="1" stroke-linejoin="round" data-id="koungou" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-H" xlink:title="Mamoudzou" xlink:href="http://google.com/?q=H">
                    <path d="M193.969,246.45L189.439,252.3L182.62,254.67L189.439,280.91L220.238,284.07L229.851,279.69L268.988,283.64L272.079,281.74L271.759,278.11L294.488,238.29L305.56,230.76L306.94,230.83L317.479,225.59L324.029,227.36L325.459,218.75L318.399,215.24L317.81,212.24L317.8,210.88L315.649,207.771L320.158,206.55L323.369,197.49L322.918,195.07L328.22,190.29L328.81,187.01L326.89,184.49L324.029,173.35L276.589,189.84L219.8,188.39L220.238,201.19L209.749,221.56" stroke-width="1" stroke-linejoin="round" data-id="mamoudzou" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-I" xlink:title="Pamandzi" xlink:href="http://google.com/?q=I">
                    <path d="M377.729,239.87L418.47,225.78L417.168,234.54L419.39,241.57L401.13,260.21L404.668,277.64L400.988,279.69L396.14,272.35L390.771,271.56" stroke-width="1" stroke-linejoin="round" data-id="pamandzi" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-J" xlink:title="Dzaoudzi" xlink:href="http://google.com/?q=J">
                    <path d="M377.729,239.87L364.109,231.55L362.209,232.2L360.248,230.83L359.988,228.08L349.238,221.92L350.05,219.41L356.359,218.36L358.109,219.28L363.488,214.62L364.369,210.521L366.399,209.61L367.699,214.17L368.908,214.78L392.601,191.92L398.56,182.75L413.63,198.08L415.199,210.521L420.05,212.68L423.39,226.18L421.351,224.41L418.47,225.78" stroke-width="1"    stroke-linejoin="round" data-id="dzaoudzi" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-K" xlink:title="Ouangani" xlink:href="http://google.com/?q=K">
                    <path d="M139.859,311.709L156.25,358.01L165.859,360.629L190.529,367.619L176.209,306.029L169.429,303.41L182.62,288.57L189.439,280.91L182.62,254.67L189.439,252.3L157.339,263.44L142.83,259.51L145.979,299.969" stroke-width="1" stroke-linejoin="round" data-id="ouangani" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer;"></path>
                </a>
                <a id="commune-L" xlink:title="Sada" xlink:href="http://google.com/?q=L">
                    <path d="M155.859,390.84L165.199,360.449L156.25,358.01L139.859,311.709L132,314.459L114.899,321.41L110.58,319.049L102.659,330.9L96.5,330.709L93.819,333.129L105.009,346.969L111.1,349.699L111.169,351.27L113.33,352.42L118.049,351.799L122.629,354.15L124.009,353.57L144.109,383.299L148.5,383.43" stroke-width="1" stroke-linejoin="round" data-id="sada" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-M" xlink:title="Bandrele" xlink:href="http://google.com/?q=M">
                    <path d="M206.69,375.15L210.738,440.35L195.009,511.109L172.379,515.369L176.669,536.66L196.64,543.299L211.05,533.549L226.62,566.029L233.249,564.59L231.399,560.539L236.79,548.41L252.69,553.76L254.47,554.439L260.109,547.689L266.589,542.779L272.158,531.189L260.859,531.25L259.779,532.689L256.96,533.09L240.979,524.51L229.851,516.25L217.859,494.18L217.729,490.059L216.22,488.939L219.829,482.01L234.429,483.83L232.009,471.59L227.101,466.68L236.46,452.83L242.029,451.42L240.908,444.039L243.009,440.41L278.97,446.24L275.279,443.199L272.62,442.92L266.39,436.199L264.72,435.299L262.46,430.26L264.169,426.92L260.759,416.18L262.271,407.93L267.181,404.059L269.47,404.389L283.359,397.379L286.169,392.279L292.589,390.18L293.899,384.809L291.408,384.02L292.71,377.309L295.339,372.49L299.068,372.559L300.779,366.25L258.238,384.869L229.359,387.42" stroke-width="1" stroke-linejoin="round" data-id="bandrele" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-N" xlink:title="Chirongui" xlink:href="http://google.com/?q=N">
                    <path d="M148.699,464.049L137.35,483.26L172.379,515.369L195.009,511.109L210.738,440.35L206.69,375.15L190.529,367.619L165.199,360.449L155.909,390.699L157.08,393.709L163.259,396.459L165.87,409.07L170.689,414.33L183.08,438.449L181.279,447.809L182.56,451.609L174.699,466.48" stroke-width="1" stroke-linejoin="round" data-id="chirongui" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-O" xlink:title="Boueni" xlink:href="http://google.com/?q=O">
                    <path d="M76.04,507.779L97.379,507.779L113.759,487.85L137.35,483.26L148.699,464.049L145.1,457.439L136.969,456.459L134.209,454.27L129.509,450.17L128.179,450.17L125.5,447.809L117.649,449.039L112.089,442.9L109.79,428.75L111.629,424.629L110.379,415.129L107.35,411.789L105.859,407.6L81.37,406.75L61.069,408.969L59.229,413.48L69.58,419.26L77.949,445.91L87.85,451.74L84.929,458.549L98.989,453.9L108.81,456.92L111.239,463.01L110.25,469.43L107.609,471.27L108.159,480.43L102.229,489.1L85.62,502.699L83.659,502.76" stroke-width="1" stroke-linejoin="round" data-id="boueni" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-P" xlink:title="Kani-keli" xlink:href="http://google.com/?q=P">
                    <path d="M196.64,543.299L198.738,554.77L186.419,574.02L174.629,573.17L171.56,574.15L165.14,559.549L161.469,558.959L148.699,566.77L144.64,557.65L146.529,548.129L141.689,548.09L133.83,544.039L129.049,544.809L120.129,563.34L116.89,558.189L114.179,556.01L114.179,549.279L118.109,542.059L115.029,531.969L121.85,520.77L120.89,519.68L119.549,511.17L112.87,507.74L107.569,514.42L107.5,516.119L96.529,520L90.469,519.73L82.549,512.189L74.299,514.49L71.81,513.83L71.549,511.15L76.04,507.779L97.379,507.779L113.759,487.85L137.35,483.26L172.379,515.369L176.669,536.66" stroke-width="1" stroke-linejoin="round" data-id="kani_keli" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                <a id="commune-Q" xlink:title="Dembeni" xlink:href="http://google.com/?q=Q">
                    <path d="M189.439,280.91L220.238,284.07L229.851,279.69L267.999,284.07L261.681,286.83L260.63,287.28L256.181,294.021L263.64,299.33L252.181,315.049L259.06,321.6L255.46,327.83L260.46,337.25L265.3,334.73L270.47,340.539L269.54,345.51L278.05,351.73L281.979,348.459L285.579,353.039L282.259,360.449L285.579,366.35L295.079,362.539L300.779,366.07L258.238,384.869L229.359,387.42L206.69,375.15L206.69,375.15L190.529,367.619L176.209,306.029L169.429,303.41" stroke-width="1" stroke-linejoin="round" data-id="dembeni" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; cursor: pointer; "></path>
                </a>
                </svg>
        </div>

        <div class="map__list">
            <ul>
                <li><a href="http://google.com/?q=A" id="list-A">M'tsamboro</a></li>
                <li><a href="http://google.com/?q=B" id="list-B">Acoua</a></li>
                <li><a href="http://google.com/?q=C" id="list-C">Bandraboua</a></li>
                <li><a href="http://google.com/?q=D" id="list-D">M'tsangamouji</a></li>
                <li><a href="http://google.com/?q=E" id="list-E">Tsingoni</a></li>
                <li><a href="http://google.com/?q=F" id="list-F">Chiconi</a></li>
                <li><a href="http://google.com/?q=G" id="list-G">Koungou</a></li>
                <li><a href="http://google.com/?q=H" id="list-H">Mamoudzou</a></li>
                <li><a href="http://google.com/?q=I" id="list-I">Pamandzi</a></li>
                <li><a href="http://google.com/?q=J" id="list-J">Dzaoudzi</a></li>
                <li><a href="http://google.com/?q=K" id="list-K">Ouangani</a></li>
                <li><a href="http://google.com/?q=L" id="list-L">Sada</a></li>
                <li><a href="http://google.com/?q=M" id="list-M">Bandrele</a></li>
                <li><a href="http://google.com/?q=N" id="list-N">Chirongui</a></li>
                <li><a href="http://google.com/?q=O" id="list-O">Boueni</a></li>
                <li><a href="http://google.com/?q=P" id="list-P">Kani-keli</a></li>
                <li><a href="http://google.com/?q=Q" id="list-Q">Dembeni</a></li>
            </ul>
        </div>
    </div>
    <script>src="app.js"</script>
</body>
</html>