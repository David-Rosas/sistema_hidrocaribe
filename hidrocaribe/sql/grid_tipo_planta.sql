 use hidrocaribe;
 CREATE OR REPLACE VIEW vw_grid_planta (id_planta , tx_nombre , tx_direccion , en_tipo_parada ,en_tipo_parada_txt,tx_tipo_planta, fk_tipo_planta) AS
    SELECT 
        pl.id_planta,
        pl.tx_nombre,
        pl.tx_direccion,
        pl.en_tipo_parada,
        CASE 
            WHEN pl.en_tipo_parada = 'OP' THEN 'OPERATIVA'
            WHEN pl.en_tipo_parada = 'NOP' THEN 'NO OPERATIVA'
            END as en_tipo_parada_txt,
        tp.tx_descripcion,
        pl.fk_tipo_planta
    FROM
        t_planta AS pl
        join
        t_tipo_planta as tp on(pl.fk_tipo_planta = tp.id_tipo_planta)
;

 select * from vw_grid_planta;