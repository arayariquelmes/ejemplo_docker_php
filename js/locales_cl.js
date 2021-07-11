// load a locale
numeral.register('locale', 'cl', {
    delimiters: {
        thousands: '.',
        decimal: ','
    },
    abbreviations: {
        thousand: 'm',
        million: 'm',
        billion: 'b',
        trillion: 't'
    },
    currency: {
        symbol: '$'
    }
});

// switch between locales
numeral.locale('cl');
