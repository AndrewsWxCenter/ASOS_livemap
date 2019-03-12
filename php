<?php

// Pull ASOS API data:
$apiPull = file_get_contents("https://api.synopticdata.com/v2/stations/nearesttime?&token=b0b6f4798ee945bcab5c743a02626b4c&within=1440&stid=KAKH,KAND,KAVL,KBUY,KCAE,KCEU,KCHS,KCLT,KCRE,KCUB,KECG,KEQY,KEWN,KFAY,KFLO,KGMU,KGRD,KGSO,KGSP,KHKY,KHSE,KILM,KINT,KMEB,KMRH,KOGB,KRDU,KRWI,KUZA&timeformat=%25Y%25m%25d&obtimezone=local&units=english&output=json");

    // NOTE: Per NWS Wilmington, KLBT will not be operational until an unspecified time in 2020. Excludes KLBT from API query

// Convert JSON => object
$data = json_decode($apiPull,TRUE);

// Time
date_default_timezone_set($data[STATION][0][TIMEZONE]);
$time = $data[STATION][0][OBSERVATIONS][air_temp_value_1][date_time];

// Define variables for each ASOS

//
//
//
// NC ASOS DATA
//
//
//

    $KAKH_cond = $data[STATION][0][OBSERVATIONS][weather_condition_value_1d][value];
    $KAKH_temp = round($data[STATION][0][OBSERVATIONS][air_temp_value_1][value],0);
    $KAKH_6hhi = round($data[STATION][0][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KAKH_24hi = round($data[STATION][0][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KAKH_6hlo = round($data[STATION][0][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KAKH_24lo = round($data[STATION][0][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KAKH_dewp = round($data[STATION][0][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KAKH_1pcp = round($data[STATION][0][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KAKH_3pcp = round($data[STATION][0][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KAKH_6pcp = round($data[STATION][0][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KAKH_24pc = round($data[STATION][0][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    $KAKH_wind = round($data[STATION][0][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KAKH_wdir = $data[STATION][0][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KAKH_visi = round($data[STATION][0][OBSERVATIONS][visibility_value_1][value],1);
    $KAKH_metr = $data[STATION][0][OBSERVATIONS][metar_value_1][value];
    
    $KAVL_cond = $data[STATION][2][OBSERVATIONS][weather_condition_value_1d][value];
    $KAVL_temp = round($data[STATION][2][OBSERVATIONS][air_temp_value_1][value],0);
    $KAVL_6hhi = round($data[STATION][2][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KAVL_6hlo = round($data[STATION][2][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KAVL_dewp = round($data[STATION][2][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KAVL_rain = round($data[STATION][2][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KAVL_wind = round($data[STATION][2][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KAVL_wdir = $data[STATION][2][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KAVL_visi = round($data[STATION][2][OBSERVATIONS][visibility_value_1][value],1);
    $KAVL_metr = $data[STATION][2][OBSERVATIONS][metar_value_1][value];
    $KAVL_24hi = round($data[STATION][2][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KAVL_24lo = round($data[STATION][2][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KAVL_1pcp = round($data[STATION][2][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KAVL_3pcp = round($data[STATION][2][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KAVL_6pcp = round($data[STATION][2][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KAVL_24pc = round($data[STATION][2][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KBUY_cond = $data[STATION][3][OBSERVATIONS][weather_condition_value_1d][value];
    $KBUY_temp = round($data[STATION][3][OBSERVATIONS][air_temp_value_1][value],0);
    $KBUY_6hhi = round($data[STATION][3][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KBUY_6hlo = round($data[STATION][3][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KBUY_dewp = round($data[STATION][3][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KBUY_rain = round($data[STATION][3][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KBUY_wind = round($data[STATION][3][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KBUY_wdir = $data[STATION][3][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KBUY_visi = round($data[STATION][3][OBSERVATIONS][visibility_value_1][value],1);
    $KBUY_metr = $data[STATION][3][OBSERVATIONS][metar_value_1][value];
    $KBUY_24hi = round($data[STATION][3][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KBUY_24lo = round($data[STATION][3][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KBUY_1pcp = round($data[STATION][3][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KBUY_3pcp = round($data[STATION][3][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KBUY_6pcp = round($data[STATION][3][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KBUY_24pc = round($data[STATION][3][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KCLT_cond = $data[STATION][7][OBSERVATIONS][weather_condition_value_1d][value];
    $KCLT_temp = round($data[STATION][7][OBSERVATIONS][air_temp_value_1][value],0);
    $KCLT_6hhi = round($data[STATION][7][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KCLT_6hlo = round($data[STATION][7][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KCLT_dewp = round($data[STATION][7][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KCLT_rain = round($data[STATION][7][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KCLT_wind = round($data[STATION][7][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KCLT_wdir = $data[STATION][7][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KCLT_visi = round($data[STATION][7][OBSERVATIONS][visibility_value_1][value],1);
    $KCLT_metr = $data[STATION][7][OBSERVATIONS][metar_value_1][value];
    $KCLT_24hi = round($data[STATION][7][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KCLT_24lo = round($data[STATION][7][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KCLT_1pcp = round($data[STATION][7][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KCLT_3pcp = round($data[STATION][7][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KCLT_6pcp = round($data[STATION][7][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KCLT_24pc = round($data[STATION][7][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KECG_cond = $data[STATION][10][OBSERVATIONS][weather_condition_value_1d][value];
    $KECG_temp = round($data[STATION][10][OBSERVATIONS][air_temp_value_1][value],0);
    $KECG_6hhi = round($data[STATION][10][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KECG_6hlo = round($data[STATION][10][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KECG_dewp = round($data[STATION][10][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KECG_rain = round($data[STATION][10][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KECG_wind = round($data[STATION][10][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KECG_wdir = $data[STATION][10][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KECG_visi = round($data[STATION][10][OBSERVATIONS][visibility_value_1][value],1);
    $KECG_metr = $data[STATION][10][OBSERVATIONS][metar_value_1][value];
    $KECG_24hi = round($data[STATION][10][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KECG_24lo = round($data[STATION][10][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KECG_1pcp = round($data[STATION][10][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KECG_3pcp = round($data[STATION][10][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KECG_6pcp = round($data[STATION][10][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KECG_24pc = round($data[STATION][10][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KEQY_cond = $data[STATION][11][OBSERVATIONS][weather_condition_value_1d][value];
    $KEQY_temp = round($data[STATION][11][OBSERVATIONS][air_temp_value_1][value],0);
    $KEQY_6hhi = round($data[STATION][11][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KEQY_6hlo = round($data[STATION][11][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KEQY_dewp = round($data[STATION][11][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KEQY_rain = round($data[STATION][11][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KEQY_wind = round($data[STATION][11][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KEQY_wdir = $data[STATION][11][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KEQY_visi = round($data[STATION][11][OBSERVATIONS][visibility_value_1][value],1);
    $KEQY_metr = $data[STATION][11][OBSERVATIONS][metar_value_1][value];
    $KEQY_24hi = round($data[STATION][11][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KEQY_24lo = round($data[STATION][11][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KEQY_1pcp = round($data[STATION][11][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KEQY_3pcp = round($data[STATION][11][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KEQY_6pcp = round($data[STATION][11][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KEQY_24pc = round($data[STATION][11][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KEWN_cond = $data[STATION][12][OBSERVATIONS][weather_condition_value_1d][value];
    $KEWN_temp = round($data[STATION][12][OBSERVATIONS][air_temp_value_1][value],0);
    $KEWN_6hhi = round($data[STATION][12][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KEWN_6hlo = round($data[STATION][12][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KEWN_dewp = round($data[STATION][12][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KEWN_rain = round($data[STATION][12][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KEWN_wind = round($data[STATION][12][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KEWN_wdir = $data[STATION][12][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KEWN_visi = round($data[STATION][12][OBSERVATIONS][visibility_value_1][value],1);
    $KEWN_metr = $data[STATION][12][OBSERVATIONS][metar_value_1][value];
    $KEWN_24hi = round($data[STATION][12][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KEWN_24lo = round($data[STATION][12][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KEWN_1pcp = round($data[STATION][12][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KEWN_3pcp = round($data[STATION][12][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KEWN_6pcp = round($data[STATION][12][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KEWN_24pc = round($data[STATION][12][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KFAY_cond = $data[STATION][13][OBSERVATIONS][weather_condition_value_1d][value];
    $KFAY_temp = round($data[STATION][13][OBSERVATIONS][air_temp_value_1][value],0);
    $KFAY_6hhi = round($data[STATION][13][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KFAY_6hlo = round($data[STATION][13][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KFAY_dewp = round($data[STATION][13][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KFAY_rain = round($data[STATION][13][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KFAY_wind = round($data[STATION][13][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KFAY_wdir = $data[STATION][13][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KFAY_visi = round($data[STATION][13][OBSERVATIONS][visibility_value_1][value],1);
    $KFAY_metr = $data[STATION][13][OBSERVATIONS][metar_value_1][value];
    $KFAY_24hi = round($data[STATION][13][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KFAY_24lo = round($data[STATION][13][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KFAY_1pcp = round($data[STATION][13][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KFAY_3pcp = round($data[STATION][13][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KFAY_6pcp = round($data[STATION][13][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KFAY_24pc = round($data[STATION][13][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KGSO_cond = $data[STATION][17][OBSERVATIONS][weather_condition_value_1d][value];
    $KGSO_temp = round($data[STATION][17][OBSERVATIONS][air_temp_value_1][value],0);
    $KGSO_6hhi = round($data[STATION][17][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KGSO_6hlo = round($data[STATION][17][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KGSO_dewp = round($data[STATION][17][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KGSO_rain = round($data[STATION][17][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KGSO_wind = round($data[STATION][17][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KGSO_wdir = $data[STATION][17][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KGSO_visi = round($data[STATION][17][OBSERVATIONS][visibility_value_1][value],1);
    $KGSO_metr = $data[STATION][17][OBSERVATIONS][metar_value_1][value];
    $KGSO_24hi = round($data[STATION][17][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KGSO_24lo = round($data[STATION][17][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KGSO_1pcp = round($data[STATION][17][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KGSO_3pcp = round($data[STATION][17][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KGSO_6pcp = round($data[STATION][17][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KGSO_24pc = round($data[STATION][17][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KHKY_cond = $data[STATION][19][OBSERVATIONS][weather_condition_value_1d][value];
    $KHKY_temp = round($data[STATION][19][OBSERVATIONS][air_temp_value_1][value],0);
    $KHKY_6hhi = round($data[STATION][19][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KHKY_6hlo = round($data[STATION][19][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KHKY_dewp = round($data[STATION][19][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KHKY_rain = round($data[STATION][19][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KHKY_wind = round($data[STATION][19][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KHKY_wdir = $data[STATION][19][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KHKY_visi = round($data[STATION][19][OBSERVATIONS][visibility_value_1][value],1);
    $KHKY_metr = $data[STATION][19][OBSERVATIONS][metar_value_1][value];
    $KHKY_24hi = round($data[STATION][19][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KHKY_24lo = round($data[STATION][19][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KHKY_1pcp = round($data[STATION][19][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KHKY_3pcp = round($data[STATION][19][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KHKY_6pcp = round($data[STATION][19][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KHKY_24pc = round($data[STATION][19][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KHSE_cond = $data[STATION][20][OBSERVATIONS][weather_condition_value_1d][value];
    $KHSE_temp = round($data[STATION][20][OBSERVATIONS][air_temp_value_1][value],0);
    $KHSE_6hhi = round($data[STATION][20][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KHSE_6hlo = round($data[STATION][20][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KHSE_dewp = round($data[STATION][20][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KHSE_rain = round($data[STATION][20][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KHSE_wind = round($data[STATION][20][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KHSE_wdir = $data[STATION][20][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KHSE_visi = round($data[STATION][20][OBSERVATIONS][visibility_value_1][value],1);
    $KHSE_metr = $data[STATION][20][OBSERVATIONS][metar_value_1][value];
    $KHSE_24hi = round($data[STATION][20][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KHSE_24lo = round($data[STATION][20][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KHSE_1pcp = round($data[STATION][20][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KHSE_3pcp = round($data[STATION][20][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KHSE_6pcp = round($data[STATION][20][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KHSE_24pc = round($data[STATION][20][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KILM_cond = $data[STATION][21][OBSERVATIONS][weather_condition_value_1d][value];
    $KILM_temp = round($data[STATION][21][OBSERVATIONS][air_temp_value_1][value],0);
    $KILM_6hhi = round($data[STATION][21][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KILM_6hlo = round($data[STATION][21][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KILM_dewp = round($data[STATION][21][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KILM_rain = round($data[STATION][21][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KILM_wind = round($data[STATION][21][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KILM_wdir = $data[STATION][21][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KILM_visi = round($data[STATION][21][OBSERVATIONS][visibility_value_1][value],1);
    $KILM_metr = $data[STATION][21][OBSERVATIONS][metar_value_1][value];
    $KILM_24hi = round($data[STATION][21][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KILM_24lo = round($data[STATION][21][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KILM_1pcp = round($data[STATION][21][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KILM_3pcp = round($data[STATION][21][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KILM_6pcp = round($data[STATION][21][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KILM_24pc = round($data[STATION][21][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KINT_cond = $data[STATION][22][OBSERVATIONS][weather_condition_value_1d][value];
    $KINT_temp = round($data[STATION][22][OBSERVATIONS][air_temp_value_1][value],0);
    $KINT_6hhi = round($data[STATION][22][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KINT_6hlo = round($data[STATION][22][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KINT_dewp = round($data[STATION][22][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KINT_rain = round($data[STATION][22][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KINT_wind = round($data[STATION][22][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KINT_wdir = $data[STATION][22][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KINT_visi = round($data[STATION][22][OBSERVATIONS][visibility_value_1][value],1);
    $KINT_metr = $data[STATION][22][OBSERVATIONS][metar_value_1][value];
    $KINT_24hi = round($data[STATION][22][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KINT_24lo = round($data[STATION][22][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KINT_1pcp = round($data[STATION][22][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KINT_3pcp = round($data[STATION][22][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KINT_6pcp = round($data[STATION][22][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KINT_24pc = round($data[STATION][22][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KMEB_cond = $data[STATION][23][OBSERVATIONS][weather_condition_value_1d][value];
    $KMEB_temp = round($data[STATION][23][OBSERVATIONS][air_temp_value_1][value],0);
    $KMEB_6hhi = round($data[STATION][23][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KMEB_6hlo = round($data[STATION][23][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KMEB_dewp = round($data[STATION][23][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KMEB_rain = round($data[STATION][23][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KMEB_wind = round($data[STATION][23][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KMEB_wdir = $data[STATION][23][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KMEB_visi = round($data[STATION][23][OBSERVATIONS][visibility_value_1][value],1);
    $KMEB_metr = $data[STATION][23][OBSERVATIONS][metar_value_1][value];
    $KMEB_24hi = round($data[STATION][23][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KMEB_24lo = round($data[STATION][23][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KMEB_1pcp = round($data[STATION][23][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KMEB_3pcp = round($data[STATION][23][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KMEB_6pcp = round($data[STATION][23][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KMEB_24pc = round($data[STATION][23][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KMRH_cond = $data[STATION][24][OBSERVATIONS][weather_condition_value_1d][value];
    $KMRH_temp = round($data[STATION][24][OBSERVATIONS][air_temp_value_1][value],0);
    $KMRH_6hhi = round($data[STATION][24][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KMRH_6hlo = round($data[STATION][24][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KMRH_dewp = round($data[STATION][24][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KMRH_rain = round($data[STATION][24][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KMRH_wind = round($data[STATION][24][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KMRH_wdir = $data[STATION][24][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KMRH_visi = round($data[STATION][24][OBSERVATIONS][visibility_value_1][value],1);
    $KMRH_metr = $data[STATION][24][OBSERVATIONS][metar_value_1][value];
    $KMRH_24hi = round($data[STATION][24][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KMRH_24lo = round($data[STATION][24][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KMRH_1pcp = round($data[STATION][24][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KMRH_3pcp = round($data[STATION][24][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KMRH_6pcp = round($data[STATION][24][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KMRH_24pc = round($data[STATION][24][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KRDU_cond = $data[STATION][26][OBSERVATIONS][weather_condition_value_1d][value];
    $KRDU_temp = round($data[STATION][26][OBSERVATIONS][air_temp_value_1][value],0);
    $KRDU_6hhi = round($data[STATION][26][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KRDU_6hlo = round($data[STATION][26][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KRDU_dewp = round($data[STATION][26][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KRDU_rain = round($data[STATION][26][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KRDU_wind = round($data[STATION][26][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KRDU_wdir = $data[STATION][26][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KRDU_visi = round($data[STATION][26][OBSERVATIONS][visibility_value_1][value],1);
    $KRDU_metr = $data[STATION][26][OBSERVATIONS][metar_value_1][value];
    $KRDU_24hi = round($data[STATION][26][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KRDU_24lo = round($data[STATION][26][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KRDU_1pcp = round($data[STATION][26][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KRDU_3pcp = round($data[STATION][26][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KRDU_6pcp = round($data[STATION][26][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KRDU_24pc = round($data[STATION][26][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    $KRWI_cond = $data[STATION][27][OBSERVATIONS][weather_condition_value_1d][value];
    $KRWI_temp = round($data[STATION][27][OBSERVATIONS][air_temp_value_1][value],0);
    $KRWI_6hhi = round($data[STATION][27][OBSERVATIONS][air_temp_high_6_hour_value_1][value],0);
    $KRWI_6hlo = round($data[STATION][27][OBSERVATIONS][air_temp_low_6_hour_value_1][value],0);
    $KRWI_dewp = round($data[STATION][27][OBSERVATIONS][dew_point_temperature_value_1][value],0);
    $KRWI_rain = round($data[STATION][27][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KRWI_wind = round($data[STATION][27][OBSERVATIONS][wind_speed_value_1][value]*1.151,0);
    $KRWI_wdir = $data[STATION][27][OBSERVATIONS][wind_cardinal_direction_value_1d][value];
    $KRWI_visi = round($data[STATION][27][OBSERVATIONS][visibility_value_1][value],1);
    $KRWI_metr = $data[STATION][27][OBSERVATIONS][metar_value_1][value];
    $KRWI_24hi = round($data[STATION][27][OBSERVATIONS][air_temp_high_24_hour_value_1][value],0);
    $KRWI_24lo = round($data[STATION][27][OBSERVATIONS][air_temp_low_24_hour_value_1][value],0);
    $KRWI_1pcp = round($data[STATION][27][OBSERVATIONS][precip_accum_one_hour_value_1][value],2);
    $KRWI_3pcp = round($data[STATION][27][OBSERVATIONS][precip_accum_three_hour_value_1][value],2);
    $KRWI_6pcp = round($data[STATION][27][OBSERVATIONS][precip_accum_six_hour_value_1][value],2);
    $KRWI_24pc = round($data[STATION][27][OBSERVATIONS][precip_accum_24_hour_value_1][value],2);
    
    ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.6/proj4.js"></script>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/us/us-nc-all.js"></script>
<script src="https://code.highcharts.com/maps/modules/offline-exporting.js"></script>
<script src="https://code.highcharts.com/maps/modules/pattern-fill.js"></script>

<style>
#map123 {
    height: 800px; 
    min-width: 0px; 
    max-width: 1776px; 
    margin: 0 auto; 
}
.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}
</style>


<div id="map123"></div>


<script>
// Initiate the chart
Highcharts.mapChart('map123', {
    chart: {
        map: 'countries/us/us-nc-all',
        style: {
            fontFamily: 'sans-serif'
        }
    },
    

    title: {
        text: 'Highmaps basic lat/lon demo'
    },

    mapNavigation: {
        enabled: true
    },

    tooltip: {
        headerFormat: '',
        pointFormat: '<b>{point.name}</b><br>Lat: {point.lat}, Lon: {point.lon}'
    },

    series: [{
        // Use the gb-all map with no data as a basemap
        name: 'Basemap',
        borderColor: '#A0A0A0',
        nullColor: 'rgba(200, 200, 200, 0.3)',
        showInLegend: false
    }, {
        name: 'Separators',
        type: 'mapline',
        nullColor: '#707070',
        showInLegend: false,
        enableMouseTracking: false
    }, {
        // Specify points using lat/lon
        type: 'mappoint',
        name: 'Cities',
        color: Highcharts.getOptions().colors[1],
        data: [{
            name: '<?php echo $KAVL_temp; ?>',
            lat: 35.432,
            lon: -82.537,
            dataLabels: {
			    style: {"fontSize": "30px", "fontWeight": "bold"}}
        }, {
            name: '<?php echo $KHKY_temp; ?>',
            lat: 35.742,
            lon: -81.382
        }, {
            name: '<?php echo $KAKH_temp; ?>',
            lat: 35.197,
            lon: -81.155
        }, {
            name: '<?php echo $KCLT_temp; ?>',
            lat: 35.213,
            lon: -80.949
        }, {
            name: '<?php echo $KEQY_temp; ?>',
            lat: 35.017,
            lon: -80.621
        }, {
            name: '<?php echo $KINT_temp; ?>',
            lat: 36.133,
            lon: -80.225
        }, {
            name: '<?php echo $KGSO_temp; ?>',
            lat: 36.098,
            lon: -79.944
        }, {
            name: '<?php echo $KBUY_temp; ?>',
            lat: 36.048,
            lon: -79.474
        }, {
            name: '<?php echo $KMEB_temp; ?>',
            lat: 34.791,
            lon: -79.368
        }, {
            name: '<?php echo $KFAY_temp; ?>',
            lat: 34.989,
            lon: -78.880
        }, {
            name: '<?php echo $KRDU_temp; ?>',
            lat: 35.892,
            lon: -78.782
        }, {
            name: '<?php echo $KILM_temp; ?>',
            lat: 34.267,
            lon: -77.900
        }, {
            name: '<?php echo $KRWI_temp; ?>',
            lat: 35.855,
            lon: -77.893
        }, {
            name: '<?php echo $KEWN_temp; ?>',
            lat: 35.068,
            lon: -77.047
        }, {
            name: '<?php echo $KMRH_temp; ?>',
            lat: 34.733,
            lon: -76.657
        }, {
            name: '<?php echo $KECG_temp; ?>',
            lat: 36.258,
            lon: -76.172
        }, {
            name: '<?php echo $KHSE_temp; ?>',
            lat: 35.232,
            lon: -75.623
            dataLabels: {
                align: 'left',
                x: 5,
                verticalAlign: 'middle'
            }
        }]
    }]
});
</script>






