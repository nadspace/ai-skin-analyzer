function sendMessage() {
    const userInput = document.getElementById('user-input').value.trim();
    if (userInput === "") {
        return;
    }

    appendMessage(userInput, 'user');

    setTimeout(() => {
        let botResponse = "I didn't understand that. Can you ask something else?";
        
        if (userInput.toLowerCase().includes('acne')) {
            botResponse = "For acne, I recommend using products with salicylic acid!";
        } else if (userInput.toLowerCase().includes('wrinkles')) {
            botResponse = "For wrinkles, look for products with retinol or peptides!";
        } else if (userInput.toLowerCase().includes('hydration')) {
            botResponse = "For hydration, look for products with hyaluronic acid and glycerin.";
        } else if (userInput.toLowerCase().includes('dry skin')) {
            botResponse = "For dry skin, choose products with rich moisturizers like ceramides and shea butter.";
        } else if (userInput.toLowerCase().includes('oily')) {
            botResponse = "If you have oily skin, opt for products with salicylic acid or niacinamide to control excess oil.";
        } else if (userInput.toLowerCase().includes('sensitive skin')) {
            botResponse = "For sensitive skin, use fragrance-free products and those with soothing ingredients like aloe vera and chamomile.";
        } else if (userInput.toLowerCase().includes('skin type')) {
            botResponse = "To determine your skin type, check whether your skin feels oily, dry, or balanced after cleansing.";
        } else if (userInput.toLowerCase().includes('best skincare routine')) {
            botResponse = "A good skincare routine includes cleansing, toning, moisturizing, and applying sunscreen every day.";
        } else if (userInput.toLowerCase().includes('retinol')) {
            botResponse = "Retinol helps with anti-aging by promoting skin cell turnover and reducing wrinkles.";
        } else if (userInput.toLowerCase().includes('serum')) {
            botResponse = "Serums are concentrated treatments designed to target specific skin concerns like acne, wrinkles, and pigmentation.";
        } else if (userInput.toLowerCase().includes('sunscreen')) {
            botResponse = "Sunscreen is essential to protect your skin from harmful UV rays and prevent sunburn, aging, and pigmentation.";
        } else if (userInput.toLowerCase().includes('dark circles')) {
            botResponse = "To reduce dark circles, use products with caffeine, vitamin C, or peptides to brighten and tighten the area.";
        } else if (userInput.toLowerCase().includes('hyperpigmentation')) {
            botResponse = "For hyperpigmentation, look for products with vitamin C, niacinamide, or alpha arbutin to lighten dark spots.";
        } else if (userInput.toLowerCase().includes('exfoliation')) {
            botResponse = "Exfoliation helps remove dead skin cells and promote a smoother, more even skin texture.";
        } else if (userInput.toLowerCase().includes('moisturizer')) {
            botResponse = "Choose a moisturizer suitable for your skin type: lightweight gel-based for oily skin and richer creams for dry skin.";
        } else if (userInput.toLowerCase().includes('peptides')) {
            botResponse = "Peptides help with collagen production, making the skin firmer and reducing the appearance of wrinkles.";
        } else if (userInput.toLowerCase().includes('vitamin c')) {
            botResponse = "Vitamin C helps brighten the skin and reduce dark spots by inhibiting melanin production.";
        } else if (userInput.toLowerCase().includes('dry lips')) {
            botResponse = "To treat dry lips, use a hydrating lip balm with ingredients like shea butter, coconut oil, or beeswax.";
        } else if (userInput.toLowerCase().includes('pore minimizer')) {
            botResponse = "To minimize pores, use products with niacinamide or salicylic acid that help tighten the skin and reduce excess oil.";
        } else if (userInput.toLowerCase().includes('eye cream')) {
            botResponse = "Eye creams with caffeine and peptides help reduce puffiness and dark circles around the eyes.";
        } else if (userInput.toLowerCase().includes('sensitive skin products')) {
            botResponse = "For sensitive skin, avoid harsh chemicals and go for soothing products with ingredients like aloe vera and chamomile.";
        } else if (userInput.toLowerCase().includes('blemishes')) {
            botResponse = "For blemishes, use spot treatments with benzoyl peroxide or salicylic acid to target breakouts.";
        } else if (userInput.toLowerCase().includes('glowing skin')) {
            botResponse = "To get glowing skin, use exfoliants, brightening serums, and hydrating products that promote a healthy complexion.";
        } else if (userInput.toLowerCase().includes('blemish scars')) {
            botResponse = "For blemish scars, look for products with vitamin C, retinol, or glycolic acid to fade dark marks.";
        } else if (userInput.toLowerCase().includes('redness')) {
            botResponse = "For redness, look for products with soothing ingredients like centella asiatica, aloe vera, or green tea extract.";
        } else if (userInput.toLowerCase().includes('blackheads')) {
            botResponse = "For blackheads, use products with salicylic acid or BHA to exfoliate and unclog pores. Clay masks can also help absorb excess oil.";
        } else if (userInput.toLowerCase().includes('uneven skin tone')) {
            botResponse = "To even out skin tone, use products with vitamin C, niacinamide, or alpha arbutin. These ingredients help brighten and reduce pigmentation.";
        } else if (userInput.toLowerCase().includes('sunburn')) {
            botResponse = "For sunburn, use soothing products with aloe vera, panthenol, or centella asiatica. Avoid harsh ingredients and always reapply sunscreen.";
        } else if (userInput.toLowerCase().includes('acne scars')) {
            botResponse = "For acne scars, use products with retinol, vitamin C, or glycolic acid to promote cell turnover and fade dark marks over time.";
        } else if (userInput.toLowerCase().includes('niacinamide')) {
            botResponse = "Niacinamide helps regulate oil production, reduce redness, and improve skin texture. It’s great for all skin types, especially oily and acne-prone skin.";
        } else if (userInput.toLowerCase().includes('hyaluronic acid')) {
            botResponse = "Hyaluronic acid is a powerful humectant that attracts and retains moisture, making it perfect for hydration and plumping the skin.";
        } else if (userInput.toLowerCase().includes('glycolic acid')) {
            botResponse = "Glycolic acid is an AHA that exfoliates the skin, improves texture, and reduces the appearance of fine lines and dark spots. It’s great for dull or aging skin.";
        } else if (userInput.toLowerCase().includes('aha and bha')) {
            botResponse = "AHAs (like glycolic acid) work on the skin’s surface to exfoliate and brighten, while BHAs (like salicylic acid) penetrate pores to unclog and reduce acne.";
        } else if (userInput.toLowerCase().includes('anti-aging')) {
            botResponse = "For anti-aging, look for retinol, peptides, or vitamin C. These ingredients boost collagen production and reduce wrinkles.";
        } else if (userInput.toLowerCase().includes('exfoliate')) {
            botResponse = "Exfoliate 1-3 times a week, depending on your skin type. Over-exfoliating can damage your skin barrier, so start slow.";
        } else if (userInput.toLowerCase().includes('retinol every day')) {
            botResponse = "Start using retinol 2-3 times a week and gradually increase as your skin builds tolerance. Always use sunscreen during the day, as retinol makes your skin more sensitive to UV rays.";
        } else if (userInput.toLowerCase().includes('skincare order')) {
            botResponse = "The general order is: cleanser → toner → serum → moisturizer → sunscreen (AM) or treatment (PM). Always apply products from thinnest to thickest consistency.";
        } else if (userInput.toLowerCase().includes('toner')) {
            botResponse = "Toners can help balance your skin’s pH and prep it for better absorption of serums and moisturizers. Look for alcohol-free toners with hydrating or soothing ingredients.";
        } else if (userInput.toLowerCase().includes('layer skincare')) {
            botResponse = "Layer products from lightest to heaviest: water-based serums first, followed by oils or creams. Allow each product to absorb before applying the next.";
        } else if (userInput.toLowerCase().includes('combination skin')) {
            botResponse = "If your T-zone (forehead, nose, and chin) is oily but your cheeks are dry or normal, you likely have combination skin.";
        } else if (userInput.toLowerCase().includes('dry skin routine')) {
            botResponse = "For dry skin, use rich moisturizers with ceramides, shea butter, or hyaluronic acid. Avoid harsh cleansers and exfoliants.";
        } else if (userInput.toLowerCase().includes('oily skin oils')) {
            botResponse = "Yes, oily skin can benefit from lightweight, non-comedogenic oils like jojoba oil or squalane, which help balance oil production.";
        } else if (userInput.toLowerCase().includes('mature skin')) {
            botResponse = "Mature skin benefits from products with retinol, peptides, and antioxidants to boost collagen and reduce wrinkles.";
        } else if (userInput.toLowerCase().includes('sensitive skin care')) {
            botResponse = "Use fragrance-free, hypoallergenic products with soothing ingredients like aloe vera, centella asiatica, or oat extract. Patch-test new products before use.";
        } else if (userInput.toLowerCase().includes('prevent breakouts')) {
            botResponse = "Keep your skin clean, avoid touching your face, and use non-comedogenic products. Incorporate salicylic acid or benzoyl peroxide into your routine.";
        } else if (userInput.toLowerCase().includes('vitamin c and retinol')) {
            botResponse = "Yes, but use vitamin C in the morning and retinol at night to avoid irritation. Always follow with sunscreen during the day.";
        } else if (userInput.toLowerCase().includes('apply sunscreen')) {
            botResponse = "Apply sunscreen as the last step in your morning routine. Use at least a nickel-sized amount for your face and reapply every 2 hours if outdoors.";
        } else if (userInput.toLowerCase().includes('under-eye bags')) {
            botResponse = "Use eye creams with caffeine or peptides to reduce puffiness. Getting enough sleep and staying hydrated also helps.";
        } else if (userInput.toLowerCase().includes('fade dark spots')) {
            botResponse = "Use brightening ingredients like vitamin C, niacinamide, or alpha arbutin. Consistent use and sunscreen are key to preventing further pigmentation.";
        } else if (userInput.toLowerCase().includes('physical vs chemical sunscreen')) {
            botResponse = "Physical sunscreens (with zinc oxide or titanium dioxide) sit on the skin and reflect UV rays, while chemical sunscreens absorb UV rays and convert them into heat.";
        } else if (userInput.toLowerCase().includes('acids in skincare')) {
            botResponse = "Yes, but start with low concentrations and use them sparingly. AHAs (like glycolic acid) and BHAs (like salicylic acid) are great for exfoliation and acne.";
        } else if (userInput.toLowerCase().includes('hormonal acne')) {
            botResponse = "Hormonal acne often requires a combination of topical treatments (like salicylic acid or benzoyl peroxide) and lifestyle changes. Consult a dermatologist for severe cases.";
        } else if (userInput.toLowerCase().includes('choose serum')) {
            botResponse = "Choose a serum based on your skin concerns: hyaluronic acid for hydration, vitamin C for brightening, or retinol for anti-aging.";
        } else if (userInput.toLowerCase().includes('prep skin for makeup')) {
            botResponse = "Start with a clean, moisturized base. Use a hydrating primer and let your skincare products absorb fully before applying makeup.";
        }

        appendMessage(botResponse, 'bot');
    }, 1000); // Simulate delay for bot response
}

function appendMessage(message, sender) {
    const chatBox = document.getElementById('chat-box');
    const newMessage = document.createElement('p');
    newMessage.classList.add(sender);
    newMessage.innerHTML = `<strong>${sender === 'user' ? 'You' : 'AI Bot'}:</strong> ${message}`;
    chatBox.appendChild(newMessage);
    chatBox.scrollTop = chatBox.scrollHeight;
}