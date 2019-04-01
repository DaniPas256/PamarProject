import { CountUp } from 'countup.js';

export class NumbersClass {

    constructor() {
        this.init();
    };

    init() {
        let first_number = new CountUp('first_number', 43);
        let second_number = new CountUp('second_number', 75);
        let third_number = new CountUp('third_number', 20);
        first_number.start();
        second_number.start();
        third_number.start();
    }
}