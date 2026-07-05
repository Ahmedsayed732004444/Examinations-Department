import json
from docx import Document

doc = Document(r'C:\Users\AIO\Downloads\مقاييس التميز الشخصي والاحتراف المهني.docx')

output = []

# Table 6 and Table 12
for idx in [6, 12]:
    table = doc.tables[idx]
    table_text = []
    for row in table.rows:
        row_text = [cell.text.strip().replace('\n', ' ') for cell in row.cells]
        table_text.append(" | ".join(row_text))
    
    output.append(f"--- Table {idx} ---\n" + "\n".join(table_text) + "\n")

with open('docx_specific_tables.txt', 'w', encoding='utf-8') as f:
    f.write("\n".join(output))
