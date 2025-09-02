class FormValidator {
    static validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    static validatePhone(phone) {
        const phoneRegex = /^\d{10}$/;
        return phoneRegex.test(phone.replace(/\D/g, ''));
    }
    
    static validatePassword(password) {
        return password.length >= 6;
    }
    
    static validateRequired(value) {
        return value.trim() !== '';
    }
    
    static showError(fieldId, message) {
        const field = document.getElementById(fieldId);
        const errorDiv = document.getElementById(fieldId + '_error') || this.createErrorDiv(fieldId);
        errorDiv.textContent = message;
        errorDiv.style.display = 'block';
        field.style.borderColor = '#dc3545';
    }
    
    static clearError(fieldId) {
        const field = document.getElementById(fieldId);
        const errorDiv = document.getElementById(fieldId + '_error');
        if (errorDiv) {
            errorDiv.style.display = 'none';
        }
        field.style.borderColor = '#ddd';
    }
    
    static createErrorDiv(fieldId) {
        const errorDiv = document.createElement('div');
        errorDiv.id = fieldId + '_error';
        errorDiv.className = 'error-message';
        errorDiv.style.color = '#dc3545';
        errorDiv.style.fontSize = '12px';
        errorDiv.style.marginTop = '5px';
        
        const field = document.getElementById(fieldId);
        field.parentNode.insertBefore(errorDiv, field.nextSibling);
        return errorDiv;
    }
}