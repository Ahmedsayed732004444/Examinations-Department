from docx import Document
import json

doc = Document(r'C:\Users\AIO\Downloads\مقاييس التميز الشخصي والاحتراف المهني.docx')
lines = [p.text.strip() for p in doc.paragraphs if p.text.strip()]

with open('docx_content.txt', 'w', encoding='utf-8') as f:
    for line in lines[:150]:
        f.write(line + '\n')
