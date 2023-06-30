---
extends: _layouts.post
section: content
title: Market Pirce API
date: 2023-06-30
description: Albion Online ရဲ့ market price တွေကို The Albion Online Data Project ကနေရပါတယ်။
featured: false
categories: [dev]
cover_image: https://res.cloudinary.com/pyaesoneaung/image/upload/v1688135780/openalbion/blog/market-price-api.png
---

Albion Online ရဲ့ market price တွေကို [The Albion Online Data Project](https://www.albion-online-data.com) ကနေရပါတယ်။

## Albion Online Data Project(AOD) ဆိုတာဘာလဲ?

AOD ကို MadDave ဆိုတဲ့ developer တစ်ယောက်က develop လုပ်ထားတာပါ။ သူက Albion Online ကို develop လုပ်ထားတဲ့ Sandbox Interactive ရဲ့ technical lead ဖြစ်ပါတယ်။ AOD ရဲ့ ရည်ရွယ်ချက်ကတော့ Albion Online ရဲ့ information တွေကို realtime collect လုပ်ပြီး ပြန်ဖြန့်ဝေချင်တာပါ။

## Data တွေ ဘယ်လို collect လုပ်တာလဲ?

Data collect လုပ်ဖို့အတွက် [albiondata-client](https://github.com/ao-data/albiondata-client) ဆိုတဲ့ software သွင်းဖို့လိုပါတယ်။ အဲ့ software က Albion Online နဲ့ သက်ဆိုင်တဲ့ data တွေကို network traffic ကဆင့် monitor လုပ်ပြီး data collect လုပ်ပါတယ်။ ရလာတဲ့ data တွေကို API ကနေတဆင့် public ကို ပြန်ပေးတာပါ။ albiondata-client ကို သုံးတဲ့သူ များလေလေ data တွေက ပို update ဖြစ်လေလေပါပဲ။ သင်ကိုယ်တိုင် Albion Online ဆော့နေတဲ့အချိန် albiondata-client ကိုဖွင့်ထားပေးပြီး AOD project ကို ကူညီပေးလို့ရပါတယ်။ [ဒီနေရာကနေ](https://github.com/ao-data/albiondata-client/releases) သက်ဆိုင်ရာ platform အလိုက် download ဆွဲလို့ရပါတယ်။
