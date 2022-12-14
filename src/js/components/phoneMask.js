const phoneMask = () => {
    let setCursorPosition = (position, element) => {
        element.focus();

        if (element.setSelectionRange) {
            element.setSelectionRange(position, position);
        } else if (element.createTextRange) {
            let range = element.createTextRange();

            range.collapse(true);
            range.moveEnd('character', position);
            range.moveStart('character', position);
            range.select();
        }
    };

    function createMask (event) {
        let matrix = '+7 (___) ___ __ __',
            i = 0,
            def = matrix.replace(/\D/g, ''),
            val = this.value.replace(/\D/g, '');
            
        if (def.length >= val.length) {
            val = def;
        }

        this.value = matrix.replace(/./g, a => {
            return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? '' : a;
        });

        if (event.type === 'blur') {
            if (this.value.length == 2) {
                this.value = '';
            }
        } else {
            setCursorPosition(this.value.length, this);
        }

        if (this.value.charAt(1) != '7') {
            this.value = '';
            this.blur();
        }
    }

    let input = document.querySelector('[name="phone"]');

    input.addEventListener('input', createMask);
    input.addEventListener('focus', createMask);
    input.addEventListener('blur', createMask);
};

window.addEventListener('DOMContentLoaded', () => {
    try {
        phoneMask();
    } catch (error) {
        console.log(error.message);
    }
});