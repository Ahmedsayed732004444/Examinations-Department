from docx import Document
import re

doc = Document(r'C:\Users\AIO\Downloads\مقاييس التميز الشخصي والاحتراف المهني.docx')
lines = [p.text.strip() for p in doc.paragraphs if p.text.strip()]

target_assessments = [
    "مقياس الأنماط الإدراكية",
    "مقياس الاستعداد الشخصي للتعامل مع الجمهور"
]

output_lines = []
capture = False
for line in lines:
    if any(t in line for t in target_assessments) and len(line) < 100:
        capture = True
        output_lines.append("\n==========================================\n" + line)
        continue
    
    # Stop capturing if we hit another assessment (heuristics: lines with "مقياس" or "تفسير النتائج" if we want to stop early)
    # Actually just capture 100 lines after each target
    if capture:
        output_lines.append(line)

with open('docx_targets.txt', 'w', encoding='utf-8') as f:
    f.write('\n'.join(output_lines))
