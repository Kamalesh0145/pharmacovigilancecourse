// Enhanced Course Details JavaScript

$(document).ready(function() {
    
    // Smooth scrolling for navigation tabs
    $('.nav-link').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        
        // Add loading animation
        $(this).addClass('loading');
        
        setTimeout(() => {
            $(this).removeClass('loading');
            $(target).tab('show');
        }, 200);
    });
    
    // Animate list items on tab show
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href");
        $(target + ' .list li').each(function(index) {
            $(this).delay(100 * index).queue(function() {
                $(this).addClass('animate-in').dequeue();
            });
        });
    });
    
    // Add hover effects to course outline items
    $('#outline .list li').hover(
        function() {
            $(this).addClass('hover-effect');
        },
        function() {
            $(this).removeClass('hover-effect');
        }
    );
    
    // Progress indicator for course outline
    $('#outline .list li').each(function(index) {
        $(this).prepend('<span class="progress-indicator">' + (index + 1) + '</span>');
    });
    
    // Enhanced form validation
    $('.comment-form form').on('submit', function(e) {
        e.preventDefault();
        
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('textarea[name="message"]').val();
        
        // Simple validation
        if (!name || !email || !subject || !message) {
            showNotification('Please fill in all fields', 'error');
            return false;
        }
        
        if (!isValidEmail(email)) {
            showNotification('Please enter a valid email address', 'error');
            return false;
        }
        
        // Show success message
        showNotification('Thank you for your review! We will review it shortly.', 'success');
        
        // Reset form
        this.reset();
    });
    
    // Smooth reveal animation for comments
    $('.comment-list').each(function(index) {
        $(this).delay(200 * index).queue(function() {
            $(this).addClass('reveal').dequeue();
        });
    });
    
    // Interactive course badge
    $('.course_badge_overlay').on('click', function() {
        $(this).addClass('pulse');
        setTimeout(() => {
            $(this).removeClass('pulse');
        }, 600);
    });
    
    // Parallax effect for course image
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        var parallax = $('.c_details_img');
        var speed = scrolled * 0.5;
        
        parallax.css('transform', 'translateY(' + speed + 'px)');
    });
    
    // Tab content fade in effect
    $('.tab-pane').on('show.bs.tab', function() {
        $(this).addClass('fade-in');
    });
    
    // Course objectives counter animation
    if ($('#objectives').length) {
        $('#objectives .list li').each(function(index) {
            $(this).css('animation-delay', (index * 0.1) + 's');
        });
    }
    
    // Enhanced tooltip for navigation tabs
    $('.nav-link').tooltip({
        placement: 'top',
        trigger: 'hover'
    });
    
    // Reading progress indicator
    function updateReadingProgress() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        
        if ($('.reading-progress').length === 0) {
            $('body').prepend('<div class="reading-progress"></div>');
        }
        
        $('.reading-progress').css('width', scrolled + '%');
    }
    
    $(window).scroll(updateReadingProgress);
    
    // Interactive course statistics (if available)
    function animateNumbers() {
        $('.stat-number').each(function() {
            var $this = $(this);
            var countTo = $this.attr('data-count');
            
            $({ countNum: $this.text() }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }
    
    // Trigger number animation when in viewport
    $(window).scroll(function() {
        $('.stat-number').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                if (!$(this).hasClass('animated')) {
                    $(this).addClass('animated');
                    animateNumbers();
                }
            }
        });
    });
});

// Helper functions
function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function showNotification(message, type) {
    var notificationClass = type === 'success' ? 'alert-success' : 'alert-danger';
    var notification = $('<div class="alert ' + notificationClass + ' notification-popup">' + message + '</div>');
    
    $('body').append(notification);
    
    notification.fadeIn(300).delay(3000).fadeOut(300, function() {
        $(this).remove();
    });
}

// CSS for notifications and animations
$('<style>')
    .prop('type', 'text/css')
    .html(`
        .notification-popup {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            display: none;
        }
        
        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(135deg, #7b2cbf 0%, #9b5cf6 100%);
            z-index: 9999;
            transition: width 0.3s ease;
        }
        
        .animate-in {
            animation: slideInUp 0.6s ease-out;
        }
        
        .hover-effect {
            transform: translateX(15px) !important;
            background: linear-gradient(135deg, #7b2cbf 0%, #9b5cf6 100%) !important;
            color: #fff !important;
        }
        
        .hover-effect a {
            color: #fff !important;
        }
        
        .progress-indicator {
            position: absolute;
            left: -50px;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background: #7b2cbf;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 12px;
            transition: all 0.3s ease;
        }
        
        .reveal {
            animation: fadeInUp 0.6s ease-out;
        }
        
        .pulse {
            animation: pulse 0.6s ease-in-out;
        }
        
        .fade-in {
            animation: fadeIn 0.4s ease-out;
        }
        
        .loading {
            position: relative;
            overflow: hidden;
        }
        
        .loading:after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            animation: loading 1s infinite;
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes loading {
            0% { left: -100%; }
            100% { left: 100%; }
        }
    `)
    .appendTo('head');